<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
  <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
  <title>Driving Lessons</title>
</head>
<body id="">
  <header class="h-24 bg-white flex items-center justify-between lg:px-20 px-8 sticky top-0 z-50">
    <a href="#" class="font-bold text-2xl">
      DRIVING LESSONS
    </a>
    <div class="flex gap-8">
      <a class="hover:underline" href="#about">About</a>
      <a class="hover:underline" href="#trainer">Trainer</a>
      <a class="hover:underline" href="#schedule">Schedule</a>
      <a class="hover:underline" href="#vehicle">Vehicle</a>
      <a class="hover:underline" href="#pricing">Pricing</a>
      <a class="hover:underline" href="#contact">Contact</a>
    </div>
  </header>
  <section class="" style="background: url({{asset('./img/main2.jpg')}});background-position:center;background-size:cover;">
    <div class="lg:px-20 px-8 py-48" style="background: rgb(255,255,255);background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0.95) 50%, rgba(0,212,255,0) 100%);">
      <div class="max-w-xl flex flex-col gap-8">
        <h1 class="text-5xl max-w-lg font-semibold leading-normal">
          Learn and master how to drive a car.
        </h1>
        <p class="text-md text-darkGrey">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
        </p>
        <a href="https://wa.me/6282310555402" class="px-10 w-fit bg-purple py-4 text-white font-semibold capitalize hover:bg-purpleLight">
          Contact Us
        </a>
      </div>
    </div>
  </section>
  <section id="about" class="lg:px-20 px-8 py-32 bg-white grid md:grid-cols-2 grid-cols-1 gap-20 items-center">
    <div class="h-96 min-w-96 bg-grey drop-shadow-xl" style="background: url({{asset('./img/driving.jpg')}});background-position:center;background-size:cover;"></div>
    <div class="flex flex-col gap-4">
      <h5 class="font-bold text-purple">About Us</h5>
      <h3 class="text-3xl font-semibold leading-normal">
        We have helped many customers to get driving
      </h3>
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </p>
    </div>
  </section>
  <div id="trainer" class="h-24"></div>
  <section class="lg:px-20 px-8 py-32 bg-black">
    <div class="flex flex-col gap-4 items-center">
      <h5 class="font-bold text-purple">Trainer</h5>
      <h3 class="text-3xl font-semibold leading-normal text-white">
        We provides the professional and experienced driver instructor
      </h3>
      <div class="grid grid-cols-5 gap-6 mt-10">
        <div class="border-t-8 border-purple p-4 bg-white shadow">
          <div style="background: url({{asset('./img/person.jpg')}});background-position:center;background-size:cover;" class="h-40 w-full"></div>
          <p class="text-lg font-medium mt-3">Supriyanto</p>
          <p class="text-sm text-darkGrey">since 2010</p>
          <p class="mt-1 text-xs">avalaible on <span class="italic">mon - fri</span></p>
          <div class="flex gap-2 flex-wrap mt-3">
            <div class="bg-purple text-white text-xs rounded-full py-1 px-4">ramah</div>
            <div class="bg-purple text-white text-xs rounded-full py-1 px-4">sabar</div>
            <div class="bg-purple text-white text-xs rounded-full py-1 px-4">jago</div>
          </div>
        </div>
        <div class="border-t-8 border-purple p-4 bg-white shadow">
          <div style="background: url({{asset('./img/person.jpg')}});background-position:center;background-size:cover;" class="h-40 w-full"></div>
          <p class="text-lg font-medium mt-3">Riski Pradana</p>
          <p class="text-sm text-darkGrey">since 2010</p>
          <p class="mt-1 text-xs">avalaible on <span class="italic">weekend</span></p>
          <div class="flex gap-2 flex-wrap mt-3">
            <div class="bg-purple text-white text-xs rounded-full py-1 px-4">ramah</div>
            <div class="bg-purple text-white text-xs rounded-full py-1 px-4">sabar</div>
            <div class="bg-purple text-white text-xs rounded-full py-1 px-4">jago</div>
          </div>
        </div>
        <div class="border-t-8 border-purple p-4 bg-white shadow">
          <div style="background: url({{asset('./img/person.jpg')}});background-position:center;background-size:cover;" class="h-40 w-full"></div>
          <p class="text-lg font-medium mt-3">Bambang Setyo</p>
          <p class="text-sm text-darkGrey">since 2010</p>
          <p class="mt-1 text-xs">avalaible on <span class="italic">weekend</span></p>
          <div class="flex gap-2 flex-wrap mt-3">
            <div class="bg-purple text-white text-xs rounded-full py-1 px-4">ramah</div>
            <div class="bg-purple text-white text-xs rounded-full py-1 px-4">sabar</div>
            <div class="bg-purple text-white text-xs rounded-full py-1 px-4">jago</div>
          </div>
        </div>
        <div class="border-t-8 border-purple p-4 bg-white shadow">
          <div style="background: url({{asset('./img/person.jpg')}});background-position:center;background-size:cover;" class="h-40 w-full"></div>
          <p class="text-lg font-medium mt-3">Dian Sastro</p>
          <p class="text-sm text-darkGrey">since 2010</p>
          <p class="mt-1 text-xs">avalaible on <span class="italic">saturday</span></p>
          <div class="flex gap-2 flex-wrap mt-3">
            <div class="bg-purple text-white text-xs rounded-full py-1 px-4">ramah</div>
            <div class="bg-purple text-white text-xs rounded-full py-1 px-4">sabar</div>
            <div class="bg-purple text-white text-xs rounded-full py-1 px-4">jago</div>
          </div>
        </div>
        <div class="border-t-8 border-purple p-4 bg-white shadow">
          <div style="background: url({{asset('./img/person.jpg')}});background-position:center;background-size:cover;" class="h-40 w-full"></div>
          <p class="text-lg font-medium mt-3">Erlangga</p>
          <p class="text-sm text-darkGrey">since 2010</p>
          <p class="mt-1 text-xs">avalaible on <span class="italic">every day</span></p>
          <div class="flex gap-2 flex-wrap mt-3">
            <div class="bg-purple text-white text-xs rounded-full py-1 px-4">ramah</div>
            <div class="bg-purple text-white text-xs rounded-full py-1 px-4">sabar</div>
            <div class="bg-purple text-white text-xs rounded-full py-1 px-4">jago</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="schedule" class="lg:px-20 px-8 py-32 bg-white grid md:grid-cols-2 grid-cols-1 gap-20 items-center">
    <div class="flex flex-col gap-4">
      <h5 class="font-bold text-purple">Schedule</h5>
      <h3 class="text-3xl font-semibold leading-normal">
        Set Your Own Training Time!
      </h3>
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </p>
    </div>
    <div class="flex flex-col gap-4">
      <div class="w-full drop-shadow p-8 bg-purple text-white text-right">
        <h2 class="text-xl font-bold uppercase">
          Monday - Thursday
        </h2>
        <p class="mt-2">09:00 - 17:00</p>
      </div>
      <div class="w-full drop-shadow p-8 border border-darkGrey">
        <h2 class="text-xl font-bold uppercase">
          Friday
        </h2>
        <p class="mt-2">14:00 - 17:00</p>
      </div>
      <div class="w-full drop-shadow p-8 bg-purple text-white text-right">
        <h2 class="text-xl font-bold uppercase">
          Weekend
        </h2>
        <p class="mt-2">10:00 - 15:00</p>
      </div>
    </div>
  </section>
  <section id="vehicle" class="relative lg:px-20 px-8 pb-10 pt-40 flex flex-col items-center gap-4">
    <h5 class="font-bold text-purple">Vehicle</h5>
    <h3 class="text-3xl font-semibold leading-normal">
      Select the car that you want to learn
    </h3>
    <main class="w-full place-content-center">
      <div x-data="imageSlider" class="relative mx-auto overflow-hidden r p-2 sm:p-4">
        <button @click="previous()" class="absolute left-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center">
          <svg class="h-8 w-8 font-bold text-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
          </svg>
        </button>
        <button @click="forward()" class="absolute right-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center">
          <svg class="h-8 w-8 font-bold text-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
          </svg>
        </button>
        <div class="relative" style="width: 100%; height: 400px">
          <template x-for="(image, index) in images">
            <div x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute top-0 h-full w-full flex justify-between items-center">
              <div class="h-full flex flex-col justify-center mx-20 gap-4">
                <p class="text-3xl font-semibold text-purple" x-text="image.title"></p>
                <p class="text-xl italic text-darkGrey" x-text="image.type"></p>
                <p class="text-xl text-darkGrey">Total : <span x-text="image.total"></span></p>
                <p class="text-xl" x-text="image.description"></p>
              </div>
              <img :src="image.image" alt="image.image" style="width: 690px;height: 'auto" />
            </div>
          </template>
        </div>
      </div>
    </main>
  </section>
  <section id="pricing" class="lg:px-20 px-8 py-32">
    <div class="flex flex-col gap-4 items-center">
      <h5 class="font-bold text-purple">Pricing</h5>
      <h3 class="text-3xl font-semibold leading-normal">
        We provides plan that suites for you
      </h3>
      <div class="grid grid-cols-4 gap-4 mt-10">
        <div class="border border-darkGrey p-8">
          <h3 class="text-xl font-bold">
            Bronze
          </h3>
          <h2 class="text-3xl font-semibold my-2">
            Rp 1.000.000
          </h2>
          <div class="h-1 w-full bg-bronze my-8"></div>
          <div class="border-b border-grey text-lg py-4">
            3x Training meets
          </div>
          <div class="border-b border-grey text-lg py-4">
            Guaranteed to be proficient
          </div>
          <div class="border-b border-grey text-lg py-4">
            Professional instructor
          </div>
        </div>
        <div class="border border-darkGrey p-8">
          <h3 class="text-xl font-bold">
            Silver
          </h3>
          <h2 class="text-3xl font-semibold my-2">
            Rp 1.500.000
          </h2>
          <div class="h-1 w-full bg-silver my-8"></div>
          <div class="border-b border-grey text-lg py-4">
            5x Training meets
          </div>
          <div class="border-b border-grey text-lg py-4">
            Guaranteed to be proficient
          </div>
          <div class="border-b border-grey text-lg py-4">
            Professional instructor
          </div>
        </div>
        <div class="border border-darkGrey bg-black text-white p-8">
          <h3 class="text-xl font-bold">
            Gold
          </h3>
          <h2 class="text-3xl font-semibold my-2">
            Rp 3.000.000
          </h2>
          <div class="h-1 w-full bg-gold my-8"></div>
          <div class="border-b border-grey text-lg py-4">
            7x Training meets
          </div>
          <div class="border-b border-grey text-lg py-4">
            Free to choose a car
          </div>
          <div class="border-b border-grey text-lg py-4">
            Guaranteed to be proficient
          </div>
          <div class="border-b border-grey text-lg py-4">
            Free to choose the instructor
          </div>
        </div>
        <div class="border border-darkGrey p-8">
          <h3 class="text-xl font-bold">
            Diamond
          </h3>
          <h2 class="text-3xl font-semibold my-2">
            Rp 10.000.000
          </h2>
          <div class="h-1 w-full bg-purple my-8"></div>
          <div class="border-b border-grey text-lg py-4">
            14x Training meets
          </div>
          <div class="border-b border-grey text-lg py-4">
            Free to choose a car
          </div>
          <div class="border-b border-grey text-lg py-4">
            Guaranteed to be proficient
          </div>
          <div class="border-b border-grey text-lg py-4">
            Free to choose the instructor
          </div>
          <div class="border-b border-grey text-lg py-4">
            Free to reschedule
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contact" class="px-5 -mb-28 relative w-full" style="height: 38rem">
    <div class="bg-purple absolute bottom-0 flex flex-col items-center gap-8 py-20 px-40" style="width:calc(100% - 40px)">
      <h1 class="text-5xl text-white font-semibold leading-normal">Lets Learn with Driving Lesson Today!</h1>
      <div class="flex gap-8 items-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d32199.551796863572!2d112.03846933167135!3d-7.639921376798393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMzgnMzEuOCJTIDExMsKwMDInMzUuMSJF!5e0!3m2!1sen!2sid!4v1678613133953!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="">
          <p class="text-white text-lg">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
          </p>
          <div class="mt-8">
            <button href="https://wa.me/6282310555402" class="pr-10 pl-8 bg-wa py-3 text-white font-semibold capitalize rounded-full">
              <div class="flex items-center gap-2">
                <img src="{{asset('./img/wa.png')}}" class="h-8" /> WhatsApp
              </div>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="bg-black text-white flex justify-between pb-10 pt-40 px-20 w-full">
    <a href="#">Terms & Condition</a>
    <p>Copyright © 2023 Driving Lessons. All Rights Reserved.</p>
  </footer>
</body>
<script>
  const data = [{
      image: 'https://i.ibb.co/HCJ0T8D/car1.webp'
      , title: 'BMW X6'
      , type: 'Manual'
      , total: '5'
      , description: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.'
    }
    , {
      image: 'https://i.ibb.co/CKR0zTQ/car2.webp'
      , title: 'BMW X7'
      , type: 'Automatic'
      , total: '10'
      , description: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.'
    }
    , {
      image: 'https://i.ibb.co/9nnQdn9/car3.webp'
      , title: 'BMW M4 Coupé'
      , type: 'Automatic'
      , total: '2'
      , description: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.'
    }
    , {
      image: 'https://i.ibb.co/xLyTZdJ/car4.webp'
      , title: 'Toyota Kijang Innova'
      , type: 'Manual'
      , total: '99'
      , description: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.'
    }
  ]
  document.addEventListener("alpine:init", () => {
    Alpine.data("imageSlider", () => ({
      currentIndex: 1
      , images: data
      , previous() {
        if (this.currentIndex > 1) {
          this.currentIndex = this.currentIndex - 1;
        } else {
          this.currentIndex = data.length
        }
      }
      , forward() {
        if (this.currentIndex < this.images.length) {
          this.currentIndex = this.currentIndex + 1;
        } else {
          this.currentIndex = 1
        }
      }
    , }));
  });

</script>
</html>
