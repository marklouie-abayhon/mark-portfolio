@extends('layouts.app')

@section('title', 'Terms and Conditions')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Terms and Conditions</h1>
    <p>By accessing this website, you agree to the following terms and conditions:</p>

    <h5>1. Use of Website</h5>
    <p>This portfolio is provided for informational purposes only. You may not misuse the site for unlawful purposes.</p>

    <h5>2. Intellectual Property</h5>
    <p>All content, including text, graphics, and code, is the property of Mark Louie E. Abayhon unless otherwise stated. Do not copy or reproduce without permission.</p>

    <h5>3. External Links</h5>
    <p>This site may link to external websites. We are not responsible for their content or privacy practices.</p>

    <h5>4. Changes to Terms</h5>
    <p>We may update these terms at any time. Continued use of the site means you accept those changes.</p>

    <h5>5. Contact</h5>
    <p>For any questions, please <a href="{{ route('contact') }}">get in touch</a>.</p>
</div>
@endsection
