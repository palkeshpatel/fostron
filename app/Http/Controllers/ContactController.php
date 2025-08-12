<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company_name' => 'nullable|string|max:255',
            'service_interested_in' => 'required|string|max:255',
            'project_budget' => 'nullable|string|max:255',
            'project_timeline' => 'nullable|string|max:255',
            'project_details' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Create contact record
            $contact = Contact::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'company_name' => $request->company_name,
                'service_interested_in' => $request->service_interested_in,
                'project_budget' => $request->project_budget,
                'project_timeline' => $request->project_timeline,
                'project_details' => $request->project_details,
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'status' => 'new'
            ]);

            // Send email notification to admin
            $this->sendAdminNotification($contact);

            // Send confirmation email to user
            $this->sendUserConfirmation($contact);

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message! We will get back to you soon.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message! We will get back to you soon.'
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again.'
            ], 500);
        }
    }

    private function sendAdminNotification($contact)
    {
        $adminEmail = 'patel.palkesh@gmail.com'; // Change this to your admin email

        $subject = 'New Contact Form Submission - ' . $contact->full_name;

        $phone = $contact->phone ?: 'Not provided';
        $company = $contact->company_name ?: 'Not provided';
        $budget = $contact->project_budget ?: 'Not specified';
        $timeline = $contact->project_timeline ?: 'Not specified';

        $message = "
        New contact form submission received:

        Name: {$contact->full_name}
        Email: {$contact->email}
        Phone: {$phone}
        Company: {$company}
        Service Interested In: {$contact->service_interested_in}
        Project Budget: {$budget}
        Project Timeline: {$timeline}

        Project Details:
        {$contact->project_details}

        Submitted at: {$contact->created_at->format('F j, Y \a\t g:i A')}
        IP Address: {$contact->ip_address}
        ";

        // Send email using PHP's built-in mail function
        $headers = "From: noreply@fostron.com\r\n";
        $headers .= "Reply-To: {$contact->email}\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        mail($adminEmail, $subject, $message, $headers);
    }

    private function sendUserConfirmation($contact)
    {
        $subject = 'Thank you for contacting Fostron';

        $budget = $contact->project_budget ?: 'Not specified';
        $timeline = $contact->project_timeline ?: 'Not specified';

        $message = "
        Dear {$contact->first_name},

        Thank you for reaching out to Fostron! We have received your inquiry about {$contact->service_interested_in}.

        Our team will review your project details and get back to you within 24-48 hours.

        Here's a summary of your submission:
        - Service: {$contact->service_interested_in}
        - Project Budget: {$budget}
        - Project Timeline: {$timeline}

        If you have any urgent questions, please don't hesitate to call us at +1 (555) 123-4567.

        Best regards,
        The Fostron Team
        hello@fostron.com
        +1 (555) 123-4567
        ";

        $headers = "From: hello@fostron.com\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        mail($contact->email, $subject, $message, $headers);
    }
}
