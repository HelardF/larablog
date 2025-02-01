@csrf

<label class="uppercase text-gray-700 text-sm" >Título</label>
<span class="text-sm text-red-700"> @error('title') {{ $message}}@enderror</span>
<input class="rounded border-gray-200 w-full mb-4"
       type="text"
       name="title"
       value="{{ old('title', $post->title) }}">

<label class="uppercase text-gray-700 text-sm" >Slug</label>
<span class="text-sm text-red-700"> @error('slug') {{ $message}}@enderror</span>
<input class="rounded border-gray-200 w-full mb-4"
       type="text"
       name="slug"
       value="{{ old('slug', $post->slug) }}">

<label class="uppercase text-gray-700 text-sm" >Contenido</label>
<span class="text-sm text-red-700"> @error('body') {{ $message}}@enderror</span>
<input class="rounded border-gray-200 w-full mb-4"
       type="text"
       name="body"
       value="{{ old('body', $post->body) }}">

<div class="flex items-center justify-between">
    <a href="{{ route('posts.index') }}"> Volver</a>
    <input
        type="submit"
        value="Enviar"
        class="text-sm bg-gray-800 text-white rouded px-2 py-1">
</div>
