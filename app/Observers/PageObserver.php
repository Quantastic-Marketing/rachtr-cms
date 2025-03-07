<?php

namespace App\Observers;

use App\Models\Pages;
use Illuminate\Support\Facades\File;

class PageObserver
{
    /**
     * Handle the Pages "created" event.
     */
    public function created(Pages $pages): void
    {
        //
    }

    /**
     * Handle the Pages "updating" event.
     */
    public function updating(Pages $page): void
    {
        try{
            if ($page->isDirty('slug') || $page->isDirty('parent_id')) {
                $oldSlug = $page->getOriginal('slug');
                $newSlug = $page->slug;

                $oldParentSlug = $page->getOriginal('parent_id') ? Pages::find($page->getOriginal('parent_id')) : null;
                $newParentSlug = $page->parent;

                $oldFullPath = $oldParentSlug ? $oldParentSlug->full_slug . '/' . $oldSlug : $oldSlug;
                $newFullPath = $newParentSlug ? $newParentSlug->full_slug . '/' . $newSlug : $newSlug;

                $basePath = resource_path('views/Templates');
                $oldFilePath = $basePath . '/' . $oldFullPath . '.blade.php';
                $newFilePath = $basePath . '/' . $newFullPath . '.blade.php';
                $oldFolderPath = $basePath . '/' . $oldFullPath;
                $newFolderPath = $basePath . '/' . $newFullPath;


                if (File::exists($oldFilePath) && !File::isEmptyDirectory($oldFolderPath)) {
                    if($page->isDirty('parent_id')){
                        File::ensureDirectoryExists(dirname($newFilePath));
                        File::move($oldFilePath, $newFilePath);
                        \Log::info("moved the files $oldFilePath → $newFilePath");
                    }else{
                        File::move($oldPath, $newPath);
                        \Log::info("Renamed file: $oldFilePath → $newFilePath");
                    }
                    
                } else {
                    \Log::warning("File not found: {$oldFilePath}");
                }

                if ($oldFolderPath === $newFolderPath) {
                    return;
                }
               
                if (File::isDirectory($oldFolderPath)) {
                    File::ensureDirectoryExists(dirname($newFolderPath));

                    if (@rename($oldFolderPath, $newFolderPath)) {
                        \Log::info("Moved folder: {$oldFolderPath} → {$newFolderPath}");
                    } else {
                        throw new \Exception("Failed to move folder: {$oldFolderPath} → {$newFolderPath}");
                    }
                } else {
                    \Log::warning("Folder not found: {$oldFolderPath}");
                }
            }
        }catch(\Exception $e){
            \Log::error("Error moving template file: " . $e->getMessage(), [
                'exception' => $e
            ]);
        }
         
    }

    /**
     * Handle the Pages "deleted" event.
     */
    public function deleted(Pages $pages): void
    {
        //
    }

    /**
     * Handle the Pages "restored" event.
     */
    public function restored(Pages $pages): void
    {
        //
    }

    /**
     * Handle the Pages "force deleted" event.
     */
    public function forceDeleted(Pages $pages): void
    {
        //
    }
}
