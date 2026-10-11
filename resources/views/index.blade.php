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
        <x-bento title="GenericProductScraper" href="https://github.com/rumor1337/GenericProductScraper" class="span-7">
            <p>product scraper for Latvian price comparison websites</p>
            <p class="standardBold">technologies:</p>

            <div class="flex-row">
                <a class="techLink" href="https://www.typescriptlang.org/" target="_blank">
                    <svg class="svgLogo" fill="none" height="26" viewBox="0 0 27 26" width="27" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="m.98608 0h24.32332c.5446 0 .9861.436522.9861.975v24.05c0 .5385-.4415.975-.9861.975h-24.32332c-.544597 0-.98608-.4365-.98608-.975v-24.05c0-.538478.441483-.975.98608-.975zm13.63142 13.8324v-2.1324h-9.35841v2.1324h3.34111v9.4946h2.6598v-9.4946zm1.0604 9.2439c.4289.2162.9362.3784 1.5218.4865.5857.1081 1.2029.1622 1.8518.1622.6324 0 1.2331-.0595 1.8023-.1784.5691-.1189 1.0681-.3149 1.497-.5879s.7685-.6297 1.0187-1.0703.3753-.9852.3753-1.6339c0-.4703-.0715-.8824-.2145-1.2365-.1429-.3541-.3491-.669-.6186-.9447-.2694-.2757-.5925-.523-.9692-.7419s-.8014-.4257-1.2743-.6203c-.3465-.1406-.6572-.2771-.9321-.4095-.275-.1324-.5087-.2676-.7011-.4054-.1925-.1379-.3409-.2838-.4454-.4379-.1045-.154-.1567-.3284-.1567-.523 0-.1784.0467-.3392.1402-.4824.0935-.1433.2254-.2663.3959-.369s.3794-.1824.6269-.2392c.2474-.0567.5224-.0851.8248-.0851.22 0 .4523.0162.697.0486.2447.0325.4908.0825.7382.15.2475.0676.4881.1527.7218.2555.2337.1027.4495.2216.6475.3567v-2.4244c-.4015-.1514-.84-.2636-1.3157-.3365-.4756-.073-1.0214-.1095-1.6373-.1095-.6268 0-1.2207.0662-1.7816.1987-.5609.1324-1.0544.3392-1.4806.6203s-.763.6392-1.0104 1.0743c-.2475.4352-.3712.9555-.3712 1.5609 0 .7731.2268 1.4326.6805 1.9785.4537.546 1.1424 1.0082 2.0662 1.3866.363.146.7011.2892 1.0146.4298.3134.1405.5842.2865.8124.4378.2282.1514.4083.3162.5403.4946s.198.3811.198.6082c0 .1676-.0413.323-.1238.4662-.0825.1433-.2076.2676-.3753.373s-.3766.1879-.6268.2473c-.2502.0595-.5431.0892-.8785.0892-.5719 0-1.1383-.0986-1.6992-.2959-.5608-.1973-1.0805-.4933-1.5589-.8879z" fill="#3178c6" fill-rule="evenodd"></path></svg>
                    <p class="bold techLink margin-top">TypeScript</p>
                </a>
                <a class="techLink" href="https://cheerio.js.org/" target="_blank">
                    <svg class="svgLogo" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="cheerio-logo-title"><title id="cheerio-logo-title">Cheerio logo</title><rect width="400" height="400" rx="30" fill="#E88C1F"/><path d="m 312 122.5 c 0.2 -2.1 -1.4 -3.1 -2.5 -4.5 c -13.1 -15.8 -29.1 -27.9 -47.6 -36.3 c -10.6 -4.8 -22 -8 -33.9 -9.4 c -11.4 -1.4 -22.6 -2.1 -34 -0.8 c -14.5 1.6 -28.3 5.8 -41.5 12 c -21.1 9.9 -38 24.9 -51.3 43.6 c -8.5 11.8 -14.6 25.1 -18.2 39.4 c -3.7 14.6 -5.8 29.3 -4.2 44.5 c 1.1 10.4 2.6 20.5 5.7 30.5 c 4.5 14.6 11.8 27.9 21.1 39.9 c 10.6 13.7 23.4 25.1 38.5 33.5 c 17.5 9.7 36.3 15.5 56.4 16.7 c 7.4 0.4 14.8 0.5 22 -0.4 c 8.6 -1 17.2 -2.9 25.6 -5.5 c 10.4 -3.3 20.2 -7.6 29.4 -13.3 c 13.2 -8.2 25.1 -18 34.4 -31.1 c -21.9 -16.5 -43.8 -32.8 -65.9 -49.4 c -10.1 11.4 -22.4 17.2 -37.4 17.1 c -13.6 -0.2 -25.1 -5.7 -33.9 -15.6 c -17.8 -20 -15.2 -51.1 5.8 -68 c 18.7 -15.1 49.3 -13 65.5 7.2 c 22 -16.5 44 -33 66 -50.1 z" fill="#FFF" stroke="#000" stroke-width="18"/></svg>
                    <p class="bold techLink margin-top">cheerio</p>
                </a>

                
            </div>
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
            <a href="https://github.com/rumor1337/{{ $commit->project }}/commit/{{ $commit->commit }}" class="commit">
                <span class="bold">{{ $commit->project }}</span>
                {{ $commit->title }};
            </a>
        @endforeach
    </x-ticker>
</x-layout>
