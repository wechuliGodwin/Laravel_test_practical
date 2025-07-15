# Laravel_With_Twilio_SMS_Intergration

A Laravel-based web application that integrates **Twilio SMS API** to allow sending SMS messages. The project also includes a basic **User Management System** (register, login, CRUD operations on users) using Laravel's authentication features.

## Features
- Send SMS messages using the Twilio API
- Laravel user authentication (login/logout)
- User registration and CRUD (Create, Edit, Delete)
- Flash messages for SMS/send status
- Clean UI with Blade and Tailwind CSS
- 
## Project Structure
app/
├── Http/
│ ├── Controllers/
│ │ ├── SmsController.php # Handles sending SMS using Twilio
│ │ └── UserController.php # Handles user auth and CRUD
resources/
├── views/
│ ├── sms.blade.php # SMS sending form
│ └── auth/ # Login, register, user CRUD views
routes/
├── web.php # All route definitions
.env # Environment variables (Twilio credentials)

🚀 Getting Started

### Prerequisites

- PHP >= 8.1
- Composer
- Laravel >= 10
- A [Twilio account](https://www.twilio.com/)
- A verified Twilio number

---

### Setup Instructions

1. Clone the repo
    git clone https://github.com/yourusername/Laravel_With_Twilio_SMS_Integration.git
    cd Laravel_With_Twilio_SMS_Integration
2. Install dependencies
    composer install
3.Create .env file
    cp .env.example .env
    Then edit .env and update the Twilio credentials:
    TWILIO_SID=your_account_sid
    TWILIO_TOKEN=your_auth_token
    TWILIO_FROM=+1XXXXXXXXXX
    Note: Use a Twilio trial number for testing. You must verify phone numbers you send to while on a trial account.
4.Generate app key
    php artisan key:generate
5.Run migrations (if needed)
    php artisan migrate
6.Serve the application
    php artisan serve
   
## Sending an SMS
Visit /sms
Enter a verified phone number (e.g. +2547XXXXXXX) and a message
Click "Send SMS"
You'll receive the message via Twilio if credentials and numbers are valid

## User Management
Login at /login
Register at /register
Dashboard available after login (/dashboard)
Add/edit/delete users through the dashboard

**Important Notes**
Trial Twilio accounts can only send SMS to verified numbers
.env file should not be committed to Git (add to .gitignore)
For production, enable SSL certificate verification

** Troubleshooting**
❌ Authentication Error - No credentials provided
→ Ensure correct TWILIO_SID and TWILIO_TOKEN in .env

❌ The number is unverified
→ Verify the recipient number in your Twilio console or upgrade your plan

❌ SSL certificate problem
→ Remove curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); in production or fix your local CA certificates

License
This project is open-source and free to use for educational and personal use.


Developed by Wechuli Godwin
Powered by Laravel and Twilio
