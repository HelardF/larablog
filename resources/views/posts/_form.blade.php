@csrf

<label class="uppercase text-gray-700 text-sm" >Título</label>
<input class="rounded border-gray-200 w-full mb-4"  type="text" name="title" value="{{ $post->title }}">

<label class="uppercase text-gray-700 text-sm" >Contenido</label>
<input class="rounded border-gray-200 w-full mb-4"  type="text" name="body" value="{{ $post->body }}">
<div class="flex items-center justify-between">
    <a href="{{ route('posts.index') }}"> Volver</a>
    <input type="submit" value="Enviar" class="text-sm bg-gray-800 text-white rouded px-2 py-1">
</div>
