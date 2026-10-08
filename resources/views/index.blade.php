<x-layout>
    <div class="bentoGrid">
        <!-- row 1 -->
        <x-bento title="rumor's website" class="span-4">
            <p>pretty self explanatory, feel free to <span class="bold">peruse</span>, <span class="bold">dig around</span> and <span class="bold">explore</span></p>
        </x-bento>
        <x-bento title="who am I?" class="span-8">
            <p>
                very great question, thanks very much, reader
            </p>
            <p>
                I am a <span class="bold">third-year</span> programming <span class="bold">student</span> from <span class="bold">Latvia</span> known in online circles as <span class="bold">rumor1337</span>
            </p>
            <p>
                by now, you're probably asking: <span class="standardBold">what do you even know?</span>
            </p>
            <p>
                I know how to <span class="bold">center a div</span>; but seriously: a <span class="bold">bit of this</span> and a <span class="bold">bit of that</span>, <span class="bold">Laravel</span>, <span class="bold">TypeScript</span>, <span class="bold">Python</span>, <span class="bold">Java</span>, each language at its own level, but can you ever truly be competent?
            </p>
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
        @foreach ($commits as $commit)
            <a href="https://github.com/rumor1337/{{ $commit->project }}/commit/{{ $commit->sha }}" class="commit">
                <span class="bold">{{ $commit->project }}</span>
                {{ $commit->title }};
            </a>
        @endforeach
    </x-ticker>
</x-layout>
