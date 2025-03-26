<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function addContactDetail(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'Name' => 'required|string|max:255',
                'Phone' => 'required|string|max:20',
                'Profession' => 'required|string',
                'Email' => 'required|email',
                'City' => 'required|string|max:100',
                'Product_Name' => 'required|string|max:255',
                'Message' => 'required|string',
            ]);

            $formData = [
                'Name' => $request->input('Name'),
                'Email' => $request->input('Email'),
                'Phone' => $request->input('Phone'),
                'City' => $request->input('City'),
                'Profession' => $request->input('Profession'),
                'Message' => $request->input('Message'),
                'Product Name' => $request->input('Product_Name'),
            ];
    
            if ($validator->fails()) {
                return response()->json(['success' => false, 'message' => $validator]);
            }
    
            \Log::info($request->all());
           
            $externalUrl ="https://script.google.com/macros/s/AKfycbzXDS62prNmiWr3f0rrnxEtSPQFLMXLnJtDAlGWCyaJFkY6T60af-ucnv_1_EBi-K_pFQ/exec";
    
            $response = Http::post($externalUrl, $formData);
    
            if ($response->successful()) {
                return response()->json(['success' => true, 'message' => 'Form submitted successfully!']);
            } else {
                return response()->json(['success' => false, 'message' => 'Form coud not be submitted. Please Try Again!']);
            }
        } catch(\Exception $e){
            \Log::error('Form submission error: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Error While submitting form!']);
        }  
       
    }

    public function addConnectDetail(Request $request){
        try{
            $validator = Validator::make($request->all(), [
                'Name' => 'required|string|max:255',
                'Phone' => 'required|string|max:10',
                'Email' => 'required|email',
                'Message' => 'nullable|string|max:500',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $webhookUrl = "https://script.google.com/macros/s/AKfycbyfreQySQeRmarwqccBgta2UFde9YhCI57d3PseeWlbbxspX1GLIc-UKyANJFzF7bVjDw/exec";

            $response = Http::post($webhookUrl, $request->only(['Name', 'Phone', 'Email', 'Message']));

            if ($response->successful()) {
                return response()->json(['success' => true, 'message' => 'Form submitted successfully!']);
            } else {
                return response()->json(['success' => false, 'message' => 'Error While submitting form!']);
            }
        }catch(\Exception $e){
            \Log::error('Form submission error: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Error While submitting form!']);
        }
    }

    public function addCvDetail(Request $request){
        try {
            // Validate form inputs
            // dd($request->all());
            $request->validate([
                'Name' => 'required|string|max:255',
                'Email' => 'required|email',
                'Phone' => 'required|string|max:10',
                'City' => 'required|string|max:100',
                'Pincode' => 'required|string|max:10',
                'Position' => 'required|string',
                'cv' => 'required|mimes:pdf,doc,docx|max:2048',
            ]);

            $formData = [
                'Name' => $request->input('Name'),
                'Email' => $request->input('Email'),
                'Phone' => $request->input('Phone'),
                'City' => $request->input('City'),
                'Pincode' => $request->input('Pincode'),
                'Position' => $request->input('Position'),
            ];

           
            if ($request->hasFile('cv')) {
                $cvPath = $request->file('cv')->store('cvs', 'public');
                $cvUrl = asset('storage/' . $cvPath);
                $formData['CV Link'] = $cvUrl;
            }

            $response = Http::attach(
                            'cv',
                            file_get_contents($request->file('cv')->path()), 
                            $request->file('cv')->getClientOriginalName()
                        )->post('https://script.google.com/macros/s/AKfycbzeWzDlPf_L3Wa35nd8In3GuIu4qQYD0DzRUy6KlcIwxmtqEJJ7aonvalE7We1Iir2M/exec', $formData);
            
            if ($response->successful()) {
                return response()->json(['success' => true, 'message' => 'Form Submitted Successfully!']);
            } else {
                return response()->json(['success' => false, 'message' => 'Error While submitting form!']);
            }
        } catch (\Exception $e) {
            \Log::error('Form submission error: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Error While submitting form!']);
        }
    }

    public function addEpoxyDetail(Request $request)
    {

        try{
             // Validate input fields
            $request->validate([
                'Name' => 'required|string|max:255',
                'Email' => 'required|email',
                'Phone' => 'nullable|string|max:10',
                'Company_Name' => 'nullable|string|max:255',
                'City' => 'nullable|string|max:255',
                'Preferences' => 'nullable|in:Commercial Space,Factory,Car Parking,Basement,Covered,Hospital',
                'Select_Unit' => 'nullable|string',
                'Select_Area' => 'nullable|string',
                'Message' => 'required|string',
            ]);

            // Prepare data for the webhook
            $formData = [
                'Name' => $request->input('Name'),
                'Email' => $request->input('Email'),
                'Phone' => $request->input('Phone'),
                'Company Name' => $request->input('Company_Name'),
                'City Name' => $request->input('City'),
                'Preferences' => $request->input('Preferences'),
                'Select Unit' => $request->input('Select_Unit'),
                'Select Area' => $request->input('Select_Area'),
                'Message' => $request->input('Message'),
            ];
            // dd($formData);
            // Replace with your actual webhook URL
            $webhookUrl = 'https://script.google.com/macros/s/AKfycbyb7Vez8W5klHybeYWfSHYQtz6m3VvY7P9vS5I3nCA4VgFK-dMuicmJ6bpDUS2imCX3Lg/exec';

            // Send the data to the webhook
            $response = Http::post($webhookUrl, $formData);

            // Check response status
            if ($response->successful()) {
                return response()->json(['success' => true, 'message' => 'Form Submitted Successfully!']);
            } else {
                return response()->json(['success' => false, 'message' => 'Error While submitting form!']);
            }
        } catch (\Exception $e) {
            \Log::error('Form submission error: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Error While submitting form!']);
        }
       
    }
}
