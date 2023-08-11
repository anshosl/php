$("document").ready(
    function(){
       function state(selectedCountry){
        var state = {
            'India': ['---select---','Uttar pradesh','Madhya Pradesh', 'Maharashtra', 'Gujarat'],
            'USA': ['---select---','New York', 'California', 'Nevada'],
            'UK': ['---select---','England', 'Scotland', 'Wales']
        };

        var stateSelect = $('#state');
        stateSelect.empty();

        state[selectedCountry].forEach(function (state) {
            stateSelect.append('<option value="' + state + '">' + state + '</option>');
        });
    }

    function citiesName(selectedState) {

        var cities = {
            'Uttar pradesh': ['--------','Kanpur','Allahabad','Jhansi','Lucknow'],
            'Madhya Pradesh': ['------','Bhopal', 'Sagar','Indore', 'Jabalpur'],
            'Maharashtra': ['------','Mumbai','Nagpur', 'Pune','Nashik'],
            'Gujarat': ['------','Ahmedabad', 'Vadodara', 'Gandhi Nagar'],
            'Rajasthan':['------','Jaipur','Jodhpur','Udaipur'],
            'Bihar':['------','Patna','Khushinagar','Jahanabad'],
            'West bengal':['------','Kolkata'],
            'Haryana' :['------','Gurugram','Faridabad'],
            'New York': ['------','New York City'],
            'California': ['------','Los Angeles'],
            'Nevada': ['------','Las Vegas'],
            'England': ['------','London'],
            'Scotland': ['------','Edinburgh'],
            'Wales': ['------','Cardiff']
        };

        var citySelect = $('#city');
        citySelect.empty();

        cities[selectedState].forEach(function (city) {
            citySelect.append('<option value="' + city + '">' + city + '</option>');
        });
    }


    
    $('#country').change(function () {
        var selectedCountry = $(this).val();
        state(selectedCountry);
    });

    $('#state').change(function () {
        var selectedState = $(this).val();
        citiesName(selectedState);
    });

});