this is upload page

    <div>

        <h1>Edit Content</h1>
        
        <form action="/articles" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="flex flex-col mb-4">
                <label class="text-xl font-bold mb-2">Title</label>
                <input name="title" type="text" placeholder="add title"></input>
            </div>
            <div>
                <label>Content</label>
                <textarea value="hello" name="content" type="text" placeholder="a current century we all need..."></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>