<x-layout :title="$title">
  @foreach ($posts as $post)
  <article class="border-b-2 border-gray-200 py-8 max-w-screen-md">
    <a class="hover:underline" href="/posts/{{ $post['id'] }}">
      <h1 class="font-bold text-gray-900 text-3xl mb-1">{{ $post['title'] }}</h1>
    </a>
    <p class="text-gray-600 mb-2">{{ $post['author'] }} | 1 Januari 2025</p>
    <p class="text-base font-thin mb-2">
      {{ Str::limit($post['body'], 100)  }}
    </p>
    <a class="text-blue-500 hover:underline" href="/posts/{{ $post['id'] }}">Read More &raquo;</a>
  </article>
  @endforeach
</x-layout>