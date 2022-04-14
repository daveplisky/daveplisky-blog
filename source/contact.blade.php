@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Projects {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}" />
@endpush

@section('body')
<h1>Some of my work</h1>

<p class="mb-8">
    <h2>Mentorship</h2>
    I have been a member of a <a href="https://www.sentventures.com/" target="_blank">SENT Ventures</a> peer mentorship community since April 2020. It's an opportunity for Catholics to share our personal, business, and spiritual journeys and help one another through focused strategy sessions. Fast forward two years, and now I am mentoring on my own through SENT. It is gratifying to share some of my experience, and I know that I am learning just as much as my mentee in the process.
</p>

<p class="mb-8">
    <h2>The BBB</h2>
    At the start of 2021, I began joining a weekly Zoom book club: Brownstone Brooklyn and Beyond. Less than nine months later, I found myself running it, and five months later, I had started another inside DeSales. Reading a book with others and then discussing it is a perfect combination of intellectual discourse, community building, and accountability. Since joining DeSales, I've had an ongoing desire to grow our company culture, and so far, this has been an effective one. Reach out for pointers on how to start your own book club in your business or personal life.
</p>

<p class="mb-8">
    <h2>A study on intentional discipleship</h2>
    At DeSales, we think a lot about how to serve Catholics who are living their faith intentionally and on mission. We had hunches about what the unmet needs of this group are. So we commissioned <a href="https://www.vinearesearch.com/" target="_blank">Vinea Research</a> and worked with them in 2021 to conduct a survey whose goal was to understand the lives and needs of these individuals. Results to be published by Summer 2022.
</p>

<p class="mb-8">
    <h2>Tilma partnership</h2>
    Langley, British Columbia is home to a very talented Catholic company called <a href="https://www.glasscanvas.io/" target="_blank">Glass Canvas</a> who produce <a href="https://www.tilmaplatform.com/" target="_blank">Tilma</a>, a simple and powerful platform for dioceses, parishes, schools, and ministries. In September 2021, DeSales entered into partnership with them to bring Tilma to as many places as possible, in an effort to modernize the Church and empower those in ministry to unlock their potential.
</p>

<p class="mb-8">
    <h2>What are you doing for Christmas?</h2>
    <center><iframe width="560" height="315" src="https://www.youtube.com/embed/8y4Y_09V7VM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>

<p class="mb-8">
    An animated video created by <a href="https://www.imbeggar.com/" target="_blank">I M Beggar</a> that I produced in December 2018. Gen Zers are often overlooked in the Church. In this campaign, we targeted young people who may not be considering church at Christmastime. 
</p>

<p class="mb-8">
    <h2>"Teach a Church to Tech"</h2>
    <center><iframe width="560" height="315" src="https://www.youtube.com/embed/mG3FXBOzzu4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
    In the Summer of 2018, I created and organized a panel at the Napa Institute Conference called <a href="https://desalesmedia.org/3-ways-tech-can-brighten-the-future-of-the-church/" target="_blank">"Teach a Church to Tech"</a>. A few of us at DeSales Media along with some colleagues discussed the near and potentially grim future of the church, and what might be done about it. As a follow-up, I created and manage a LinkedIn group called <a href="http://digitalcatholics.org" target="_blank">Digital Catholics</a>, which badly needs a moderator. Please let me know if you're interested!
</p>

<form action="/contact" class="mb-12">
    <div class="flex flex-wrap mb-6 -mx-3">
        <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
            <label class="block mb-2 text-gray-800 text-sm font-semibold" for="contact-name">
                Name
            </label>

            <input
                type="text"
                id="contact-name"
                placeholder="Jane Doe"
                name="name"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                required
            >
        </div>

        <div class="w-full px-3 md:w-1/2">
            <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-email">
                Email Address
            </label>

            <input
                type="email"
                id="contact-email"
                placeholder="email@domain.com"
                name="email"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                required
            >
        </div>
    </div>

    <div class="w-full mb-12">
        <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-message">
            Message
        </label>

        <textarea
            id="contact-message"
            rows="4"
            name="message"
            class="block w-full border shadow rounded-lg outline-none appearance-none mb-2 px-4 py-3"
            placeholder="A lovely message here."
            required
        ></textarea>
    </div>

    <div class="flex justify-end w-full">
        <input
            type="submit"
            value="Submit"
            class="block bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold leading-snug tracking-wide uppercase shadow rounded-lg cursor-pointer px-6 py-3"
        >
    </div>
</form>
@stop
