@props(['comment'])

<article class="p-6 mb-4 text-base bg-gray-200 rounded-lg">
    <x-molecules.profile-header :data="$comment" />
    <p class="comment-edit-form-{{ $comment->id }}">{{ $comment->text }}</p>
    @if (auth()->user()?->id == $comment->user_id)
        <form action="{{ route('comment.update', $comment->id) }}" method="POST"
            class="mb-6 hidden comment-edit-form-{{ $comment->id }}">
            @csrf
            @method('PUT')

            <x-atoms.form-textarea name="text" placeholder="Write a comment...">
                {{ old('text', $comment->text) }}
            </x-atoms.form-textarea>
            <x-atoms.button type="submit" class="bg-gray-800" content="Update comment" />
        </form>
    @endif

    {{-- @can('post-manage', $data) --}}
    <div class="flex space-x-2 mt-1">
        <x-atoms.button type="button" click="toggleEditForm({{ $comment->id }})" class="bg-gray-800" content="Edit" />
        <form action="{{ route('comment.destroy', $comment->id) }}" method="POST" class="text-red-500 cursor-pointer">
            @csrf
            @method('DELETE')
            <x-atoms.button type="submit" class="bg-red-500" content="Delete" />
        </form>
    </div>
    {{-- @endcan --}}
</article>
<script>
    function toggleEditForm(commentId) {
        var commentEditForms = document.querySelectorAll('.comment-edit-form-' + commentId);
        commentEditForms.forEach(function(form) {
            form.classList.toggle('hidden');
        });
    }
</script>
