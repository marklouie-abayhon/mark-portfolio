@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Privacy Policy</h1>
    <p>At Mark Louie E. Abayhon’s Portfolio, your privacy is important. This policy outlines how your personal data is collected, used, and protected.</p>

    <h5>1. Information Collected</h5>
    <p>We only collect personal information when you voluntarily submit it, such as through the contact form.</p>

    <h5>2. Use of Information</h5>
    <p>Your data is used solely to respond to your inquiries and improve our services. It is never sold or shared with third parties.</p>

    <h5>3. Cookies</h5>
    <p>This website may use cookies to enhance the user experience. You can disable cookies in your browser settings.</p>

    <h5>4. Security</h5>
    <p>We implement security measures to protect your data. However, no internet transmission is 100% secure.</p>

    <h5>5. Contact</h5>
    <p>If you have any questions about this Privacy Policy, please <a href="{{ route('contact') }}">contact us</a>.</p>
</div>
@endsection
