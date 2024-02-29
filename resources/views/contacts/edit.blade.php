<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            新規お問い合わせ登録フォーム
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="text-gray-600 body-font relative">
                        <form method="post" action="{{route('contacts.store')}}">
                            @csrf
                            <div class="container px-5 py-10 mx-auto">
                                <div class="flex flex-col text-center w-full mb-12">
                                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">お問い合わせ内容</h1>
                                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">できるだけ詳細に御入力お願いいたします</p>
                                </div>
                                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                    <div class="flex flex-wrap">
                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="name" class="leading-7 text-sm text-gray-600">お名前</label>
                                                <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                                                <input type="text" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="title" class="leading-7 text-sm text-gray-600">タイトル</label>
                                                <input type="text" id="title" name="title" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="url" class="leading-7 text-sm text-gray-600">ホームページ</label>
                                                <input type="url" id="url" name="url" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                        <div class="p-3 w-full">
                                            <div class="relative">
                                                <label class="leading-7 mr-2 text-sm text-gray-600">性別</label>
                                                <input type="radio" id="url" name="gender" value="0">男性
                                                <input type="radio" id="url" name="gender" value="1">女性
                                            </div>
                                        </div>
                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="age" class="leading-7 mr-2 text-sm text-gray-600 rounded">年齢</label>
                                                <select name="age" id="" class="rounded border border-gray-300">
                                                    <option value="1">~19歳</option>
                                                    <option value="2">20~29歳</option>
                                                    <option value="3">30~39歳</option>
                                                    <option value="4">40~49歳</option>
                                                    <option value="5">50~59歳</option>
                                                    <option value="6">60歳~</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="content" class="leading-7 text-sm text-gray-600">具体的な内容</label>
                                                <textarea id="content" name="content" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                            </div>
                                        </div>
                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <input class="mr-2 rounded" type="checkbox" id="caution" name="caution">注意事項に同意する
                                            </div>
                                        </div>
                                        <div class="p-2 w-full">
                                            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>