<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            お問い合わせ一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{route('contacts.create')}}" class="text-indigo-600 text-2xl font-semibold">新規登録</a>
                    <form method="get" action="{{route('contacts.index')}}">
                        <input class="rounded" type="text" name="search" placeholder="検索キーワードを入力してください">
                        <button class="text-white bg-indigo-500 border-0 py-2 px-8 ml-2 focus:outline-none hover:bg-indigo-600 rounded text-lg">検索する</button>
                    </form>
                </div>
                <div class="p-5">
                    <div class="lg:w-full w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                                <tr>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ID</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">お名前</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">タイトル</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">登録日</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">詳細</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td class="border-t-2 border-gray-200 px-4 py-3"> {{$contact->id}}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3"> {{$contact->name}}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3"> {{$contact->title}}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3"> {{$contact->created_at}}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3 "><a class="text-indigo-500" href="{{route('contacts.show', ['contact'=>$contact->id])}}">詳細を見る</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$contacts->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>