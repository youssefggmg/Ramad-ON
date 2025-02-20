@props(['post'])
{{-- {{ dd($post->post_comment) }} --}}
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
        <p class="mb-4">{{$post->content}}</p>
        <img src="{{$post->image}}" alt="Post" class="w-full rounded-lg mb-4">
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
        <form action="">
            <input type="number" hidden value="{{$post->id}}">
            <input type="text" required placeholder="Write a comment..."
            class=" px-4 py-2 rounded-full bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">send</button>
        </form>
    </div>
</div>
@foreach ($post->post_comment as $comment )
<div class="max-w-2xl mx-auto bg-white rounded-lg shadow p-4">
    <!-- Comments List -->
    <div class="space-y-4">
        <!-- Comment 1 -->
        <div class="flex gap-3">
            <img src="https://static.vecteezy.com/system/resources/previews/009/292/244/non_2x/default-avatar-icon-of-social-media-user-vector.jpg" alt="John" class="h-8 w-8 rounded-full" />
            <div class="flex-1">
                <div class="bg-gray-100 rounded-2xl px-4 py-2 inline-block">
                    <div class="font-semibold text-sm">John Doe</div>
                    <div class="text-sm">This is amazing! 🎉</div>
                </div>

                <div class="flex gap-4 text-sm text-gray-500 mt-1 px-4">
                    <button class="font-semibold hover:text-blue-600">Like</button>
                    <button class="font-semibold">Reply</button>
                    <span>2h</span>
                </div>
            </div>
        </div>

        <!-- Comment 2 -->
        <div class="flex gap-3">
            <img src="/api/placeholder/32/32" alt="Alice" class="h-8 w-8 rounded-full" />
            <div class="flex-1">
                <div class="bg-gray-100 rounded-2xl px-4 py-2 inline-block">
                    <div class="font-semibold text-sm">Alice Johnson</div>
                    <div class="text-sm">Great work on this!</div>
                </div>

                <div class="flex gap-4 text-sm text-gray-500 mt-1 px-4">
                    <button class="font-semibold hover:text-blue-600">Like</button>
                    <button class="font-semibold">Reply</button>
                    <span>30m</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach