<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  @foreach ($posts as $post)
  <article class="py-8 max-v-screen-md border-b border-gray-300">
    <a href="/posts/{{ $post['id'] }}" class="hover:underline">
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
      <div class="text-base text-gray-500">
        <a href="#">{{ $post['author'] }} | 7 December 2014</a>
      </div>
    </a>
    <p class="my-4 font-light">{{ Str::limit($post['body'], 150) }}</p>
    <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline">Read more</a>
  </article>
  @endforeach

</x-layout>