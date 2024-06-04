<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                <form action="{{ route('create-todo') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
                        <input type="text" name="title" id="title" class="form-input mt-1 block w-full" required autofocus>
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
                        <textarea name="description" id="description" rows="3" class="form-textarea mt-1 block w-full" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="due_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Due Date</label>
                        <input type="date" name="due_date" id="due_date" class="form-input mt-1 block w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="priority" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Priority</label>
                        <select name="priority" id="priority" class="form-select mt-1 block w-full" required>
                            <option value="low">Low</option>
                            <option value="medium">Medium</option>
                            <option value="high">High</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Status</label>
                        <select name="status" id="status" class="form-select mt-1 block w-full" required>
                            <option value="pending">Pending</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">
                            Create Todo
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
