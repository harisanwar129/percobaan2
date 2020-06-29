@component('mail::message')
# Pendaftaran Siswa

Selamat Datang Di SMK NEGERI 1 CIPANAS

@component('mail::button', ['url' => 'localhost:8000/login'])
Klik Disini
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
