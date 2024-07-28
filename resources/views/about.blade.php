<x-layout>
    <x-slot:title><span class="text-white" >{{ $title }}</span></x-slot:title>
  <div class="p-2 bg-blue-50" x-data="{ showVisi: false, showMisi: false }">
      <h2 class="text-2xl font-bold text-black-800 mb-4"></h2>
      <div class="mt-4">
          <button class="text-xl bg-blue-500 text-white px-3 py-1 rounded font-semibold"> Visi</button>
          <div x-show=class="mt-2">
              <h3 class="text-xl font-semibold text-black-700"></h3>
              <li class="text-black-600">Menjadi Lembaga Pendidikan dan Pelatihan Kepelautan yang Terunggul di Asia</li>
          </div>
      </div>
      <div class="mt-4">
          <button class="text-xl bg-blue-500 text-white px-3 py-1 rounded font-semibold"> Misi</button>
          <div x-show= class="mt-2">
              <h3 class="text-xl font-semibold text-black-700"></h3>
              <ul class="list-disc list-inside text-black-600">
                  <li>Meningkatkan Jumlah Lulusan yang Memiliki Kompetensi Sesuai Dengan Standard Of Training Certification and Watckeeping For Seafarers dan Amandemennya Serta Perundang-Undangan Nasional</li>
                  <li>Memberikan Peluang Bagi Tenaga Akademik Untuk Mengembangkan Ilmu Kepelautan Melalui Pendidikan Formal dan Non Formal</li>
                  <li>Menyediakan Fasilitas Pendidikan dan Pelatihan yang Mutakhir untuk Peningkatan Kompetensi Pelaut</li>
              </ul>
          </div>
      </div>
  </div>
</x-layout>
