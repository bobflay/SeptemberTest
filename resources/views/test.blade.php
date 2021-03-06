@extends('layout.master')


@section('styles')
  <link rel="stylesheet" href="/intl-tel-input-16.0.0/build/css/intlTelInput.css">
  <link rel="stylesheet" href="/intl-tel-input-16.0.0/build/css/demo.css">
@endSection

@section('content')


  <h1>International Telephone Input</h1>
  <form>
    <input id="phone" name="phone" type="tel">
    <button type="submit">Submit</button>
  </form>

  <script src="/intl-tel-input-16.0.0/build/js/intlTelInput.js"></script>
  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "/intl-tel-input-16.0.0/build/js/utils.js",
    });
  </script>
@endsection

