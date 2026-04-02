<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="min-h-screen flex flex-col bg-gray-100">
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
    <div class="mt-8 space-y-2">
        <!-- card header start -->
            <div class="p-4 shadow rounded-lg bg-white">
                <H1 class="text-2xl font-bold">Tambah Siswa</H1>
                <P>Menambahkan siswa ke dalam Sistem</P>
            </div>
        <!-- card header end -->

    <!-- Card Body Start -->

    <div class="bg-white shadow rounded-lg p-4">
        <form action="" class="grid grid-cols-2 gap-4">
        <div class="space-y-2">
            <label class="block font-bold" for="name">Nama</label>
            <input class="w-full px-4 py-2 border rounded-lg" type="text" id="name" placeholder="Masukkan nama" name="nis">
        </div>
        <div class="space-y-2">
            <label class="block font-bold" for="nis">NIS</label>
            <input class="w-full px-4 py-2 border rounded-lg" type="text" id="nis" placeholder="Masukkan NIS" name="name">
        </div>
        <div class="space-y-2">
            <label class="block font-bold" for="class">Kelas</label>
            <input class="w-full px-4 py-2 border rounded-lg" type="text" id="class" placeholder="Masukkan kelas" name="class">
        </div>
        <div class="space-y-2">
            <label class="block font-bold" for="phone_number">No Telepon</label>
            <input class="w-full px-4 py-2 border rounded-lg" type="text" id="phone_number" placeholder="Masukkan no telepon" name="phone_number">
        </div>
        </form>
    </div>

    <!-- Card body end -->
        
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