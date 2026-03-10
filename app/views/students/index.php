<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="min-h-screen flex flex-col">
<!-- Header start -->
<header class="bg-violet-500 text-white">
<div class="flex items-center justify-between container mx-auto p-4">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-violet-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
</header>    
<!-- Header End -->

<!-- Main start -->
 <main class=" container mx-auto grow">
    <div class="mt-8">
        <!-- card header start -->
            <div class="p-4 shadow rounded-lg">
                <H1 class="text-2xl font-bold">Daftar Siswa</H1>
                <P>Menampilkan daftar siswa yang terdaftar</P>
            </div>
        <!-- card header end -->

    </div>
 </main>

<!-- Footer start -->
<footer class="bg-gray-800 text-white">
    <div class="text-center p-4">
        &copy <!?= date('Y')?> Sistem Sekolah - SMK KRISTEN IMMANUEL
    </div>
</footer>
<!-- Footer End -->
</body>


</html>