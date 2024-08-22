<div>
    <h1>{{$title}}</h1>
    <h2>{{$author}}</h2>
    @foreach($posts as $post)
        <div wire:key="{{$post->id}}">
            {{$post->name}}
        </div>
    @endforeach

    <h1>调用其他组件</h1>
    @foreach ($posts as $post)
        <livewire:post-item :$post :key="$post->id"></livewire:post-item>    
    @endforeach

    <h1>使用livewire函数调用其他组件</h1>
    @foreach($posts as $post)
        @livewire(PostItem::class, ['post' => $post], key($post->id))
    @endforeach

    <h1>数据绑定演示：非同步的：{{$inputVal}}-同步的：{{$inputVal2}}</h1>
    <input type="text" id="title" wire:model="inputVal"> 
    <input type="text" id="title" wire:model.live="inputVal2"> 

    <h1>表单提交</h1>
    <form wire:submit="save">
        <label for="title">Title:</label>
        <input type="text" id="title" wire:model="postTitle">
        <button type="submit">Save</button>
    </form>
</div>
