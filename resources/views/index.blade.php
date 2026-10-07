<x-layout>
    <div class="bentoGrid">
        <!-- row 1 -->
        <x-bento title="`tis my website" class="span-4">
            <p>Pretty much</p>
        </x-bento>
        <x-bento title="Test entry" class="span-8">
            <p>This is a test entry, one of them</p>
        </x-bento>

        <!-- row 2 -->
        <x-bento title="Another entry" class="span-7">
            <p>This is another entry</p>
        </x-bento>
        <x-bento title="Final entry" class="span-5">
            <p>This is the final entry</p>
        </x-bento>
        
        <!-- row 3 -->
        <x-bento title="Not the final entry?" class="span-3">
            <p>Maybe I lied?</p>
        </x-bento>
        <x-bento class="span-3">
            <p>Yeah just an entry?</p>
            <a href="#">test link</a>
        </x-bento>
        <x-bento title="The final final final final entry" class="span-6">
            <p>I don't know what to type here anymore, I was intending it to be 5 boxes at most?</p>
        </x-bento>
    </div>

    <x-ticker>
        <p>Commit ticker</p>
    </x-ticker>
</x-layout>