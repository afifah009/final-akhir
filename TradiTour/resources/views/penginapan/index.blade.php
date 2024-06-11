@extends('tampilan.index')

@section('konten')

<header class="section__container header__container">
  <div class="header__image__container">
      <img src="{{ asset('image/hotel.jpg') }}" alt="Header Image" class="header__img">
      <div class="header__content">
          <h1>Nikmati Liburan Impian Anda</h1>
          <p>Pilihlah Hotel Terdekat dari Tempat Wisata Anda</p>
      </div>
  </div>
</header>

<section class="section__container popular__container p-4">
  <h2 class="section__header">Popular Hotels</h2>
  <div class="popular__grid">
      <div class="popular__card">
          <img src="{{ asset('image/redors.jpg') }}" alt="popular hotel" />
          <div class="popular__content">
              <div class="popular__card__header">
                  <h4>The Plaza Hotel</h4>
                  <h4>$499</h4>
              </div>
              <p>New York City, USA</p>
              <p class="text-dark">An iconic luxury hotel located in the heart of Manhattan, offering timeless elegance and modern amenities.</p>
          </div>
      </div>
      <div class="popular__card">
          <img src="{{ asset('image/atas.jpg') }}" alt="popular hotel" />
          <div class="popular__content">
              <div class="popular__card__header">
                  <h4>Ritz Paris</h4>
                  <h4>$549</h4>
              </div>
              <p>Paris, France</p>
              <p class="text-dark">A historic hotel known for its luxury and prestige, offering world-class service and exquisite dining experiences.</p>
          </div>
      </div>
      <div class="popular__card">
          <img src="{{ asset('image/redors.jpg') }}" alt="popular hotel" />
          <div class="popular__content">
              <div class="popular__card__header">
                  <h4>The Peninsula</h4>
                  <h4>$599</h4>
              </div>
              <p>Hong Kong</p>
              <p class="text-dark">A legendary hotel combining tradition and modernity, with stunning views of Victoria Harbour and exceptional service.</p>
          </div>
      </div>
      <div class="popular__card">
          <img src="{{ asset('image/redors.jpg') }}" alt="popular hotel" />
          <div class="popular__content">
              <div class="popular__card__header">
                  <h4>Atlantis The Palm</h4>
                  <h4>$449</h4>
              </div>
              <p>Dubai, United Arab Emirates</p>
              <p class="text-dark">A majestic ocean-themed resort located on the Palm Jumeirah, offering underwater suites and thrilling marine adventures.</p>
          </div>
      </div>
      <div class="popular__card">
          <img src="{{ asset('image/redors.jpg') }}" alt="popular hotel" />
          <div class="popular__content">
              <div class="popular__card__header">
                  <h4>The Ritz-Carlton</h4>
                  <h4>$649</h4>
              </div>
              <p>Tokyo, Japan</p>
              <p class="text-dark">A sophisticated hotel located in the heart of Tokyo, offering luxurious accommodations and panoramic city views.</p>
          </div>
      </div>
      <div class="popular__card">
          <img src="{{ asset('image/redors.jpg') }}" alt="popular hotel" />
          <div class="popular__content">
              <div class="popular__card__header">
                  <h4>Marina Bay Sands</h4>
                  <h4>$549</h4>
              </div>
              <p>Singapore</p>
              <p class="text-dark">An iconic integrated resort featuring a rooftop infinity pool, world-class dining, and stunning views of the Singapore skyline.</p>
          </div>
      </div>
  </div>
</section>

  @endsection