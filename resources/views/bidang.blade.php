<x-Layout>
  <x-slot:title><span class="text-white" >{{ $title }}</span></x-slot:title>
    @foreach ($posts as $post)
      

  <article class="py-8 max-w-screen-md border-b  border-gray-300 ">
    <h2 class="mb-1 text-2xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
    <div class="text-base text-gray-500">
      <a href="#">{{ $post['author'] }}</a>
    </div>
    <p class="my-4 font-light">{{ $post['body'] }}</p>
      <a href="files" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
  </article>
   @endforeach
</x-Layout>