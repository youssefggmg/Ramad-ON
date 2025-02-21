@props(['recipe'])
<div class="bg-white rounded-lg shadow-md">
    <div class="p-4">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center space-x-2">
                <img src="https://static.vecteezy.com/system/resources/previews/009/292/244/non_2x/default-avatar-icon-of-social-media-user-vector.jpg"
                    alt="Profile" class="w-10 h-10 rounded-full">
                <div>
                    <h3 class="font-semibold">user</h3>
                </div>
            </div>
            <button class="text-gray-500 hover:bg-gray-100 p-2 rounded-full">
                <i class="fas fa-ellipsis-h"></i>
            </button>
        </div>
        <p class="mb-4">dhsfkjsdhfkjsdhfkjhsdkjfhsdkjfhskdjhfkjsdhf</p>
        <div class="flex items-center justify-between text-gray-500 pt-4 border-t">
            <button class="flex items-center space-x-2 hover:bg-gray-100 px-4 py-2 rounded-lg">
                <i class="fas fa-thumbs-up"></i>
                <span>Like</span>
            </button>
            <button class="flex items-center space-x-2 hover:bg-gray-100 px-4 py-2 rounded-lg">
                <i class="fas fa-comment"></i>
                <span>Comment</span>
            </button>
            <button class="flex items-center space-x-2 hover:bg-gray-100 px-4 py-2 rounded-lg">
                <i class="fas fa-share"></i>
                <span>Share</span>
            </button>
        </div>
    </div>
</div>
<!-- Comment Input -->
<div class="flex gap-3 mb-6">
    <img src="https://static.vecteezy.com/system/resources/previews/009/292/244/non_2x/default-avatar-icon-of-social-media-user-vector.jpg" alt="Current user" class="h-8 w-8 rounded-full" />
    <div class="flex-1">
        {{-- <form action="/create/postComment" method="POST"> --}}
            @csrf
            <input type="number" name="Post_id" hidden value="{{$recipe->id}}">
            <input type="text" name="content" required placeholder="Write a comment..."
            class=" px-4 py-2 rounded-full bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">send</button>
        </form>
    </div>
</div>
@foreach ($recipe->recipe_comment as $comment )
<div class="max-w-2xl mx-auto bg-white rounded-lg shadow p-4">
    <!-- Comments List -->
    <div class="space-y-4">
        <!-- Comment 1 -->
        <div class="flex gap-3">
            <img src="https://static.vecteezy.com/system/resources/previews/009/292/244/non_2x/default-avatar-icon-of-social-media-user-vector.jpg" alt="John" class="h-8 w-8 rounded-full" />
            <div class="flex-1">
                <div class="bg-gray-100 rounded-2xl px-4 py-2 inline-block">
                    <div class="font-semibold text-sm">user</div>
                    <div class="text-sm">{{$comment->content}}</div>
                </div>
            </div>
        </div>
    </div>
</div>