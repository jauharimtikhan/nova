&extends('layouts.app')

&section('title', 'Halaman Utama')

&section('content')

<h1>Halo, [[ $name ]]!</h1>


[[-- ini komentar, ga akan muncul di HTML output --]]

&if(count($users) > 0)
<h2>Daftar User ([[ count($users) ]])</h2>
&endif

&forelse($users as $user)
<div class="user-card">
    <strong>[[ $user['name'] ]]</strong>
    &if($user['email'] === 'jauhar@gmail.com')
    <span class="badge">Admin</span>
    &endif
</div>
&empty
<p>Belum ada user yang terdaftar.</p>
&endforelse

&foreach($categories as $category)
<li>[[ $category ]]</li>
&endforeach

&unless($isGuest)
<p>Kamu adalah member terdaftar.</p>
&endunless

<form method="POST" action="/users/5">
    &csrf
    &method('PUT')
    <input type="text" name="name">
    <button type="submit">Update</button>
</form>

&isset($optionalData)
<p>Data opsional: [[ $optionalData ]]</p>
&endisset

&empty($users)
<p>Ga ada data user sama sekali.</p>
&endempty

<h2>[[csrf_token()]]</h2>
&endsection

&push('js')
<script>
    // alert('dari home bre')
</script>
&endpush;