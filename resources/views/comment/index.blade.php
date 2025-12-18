<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Comment</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-sky-100 p-8">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <label for="comment" class="block text-sky-700 text-lg font-semibold mb-2">Comment:</label>
            
            <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Enter your comment"
                class="w-full p-3 border-2 border-sky-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"></textarea>
            
            @error('comment')
                <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
            @enderror

            <button type="submit"
                class="mt-4 w-full py-2 bg-sky-500 text-white font-semibold rounded-lg hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-sky-400">
                Submit
            </button>
        </form>
    </div>

    <div>
        @forelse ($comments as $comment)
            <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md mt-6">
                <p class="text-gray-800">{{ $comment->comment }}</p>
            </div>
        @empty
            <p class="text-center text-gray-600 mt-6">No comments yet.</p>
        @endforelse 
    </div>
</body>

</html>
