<!-- Email content -->

<!DOCTYPE html>
<html>
<head>
    <style>
        

    </style>
</head>
<body>
    <h1>Form Data</h1>

    <p><strong>Profession:</strong>
        @if(request()->has('pornstar')) {{ $formData['pornstar'] }}, @endif
        @if(request()->has('cam_model')) {{ $formData['cam_model'] }}, @endif
        @if(request()->has('social_media_star')) {{ $formData['social_media_star'] }}, @endif
        @if(request()->has('magazine_model')) {{ $formData['magazine_model'] }}, @endif
        @if(request()->has('other')) {{ $formData['other'] }}, @endif
    </p>
    {{-- <p><strong>Magazine Name:</strong> {{ $formData['name'] }} </p> --}}
    {{-- <p><strong>Stage Name:</strong> {{ $formData['stage_name'] }} </p> --}}
    <p><strong>Email:</strong> {{ $formData['email'] }} </p>
    <p><strong>Phone:</strong> {{ $formData['phone'] }} </p>
    <p><strong>Nationality:</strong> {{ $formData['nationality'] }} </p>
    <p><strong>Age:</strong> {{ $formData['age'] }} </p>
    <p><strong>Date of Birth:</strong> {{ $formData['dob'] }} </p>
    <p><strong>Marital Status:</strong> {{ $formData['marital_status'] }} </p>
    </br>

    

    <h2>Model Experience</h2>
    <p><strong>Foreign Model:</strong> {{ $formData['foreign_model'] }} </p>
    <p><strong>Have You Model Before:</strong> {{ $formData['medeled_before'] }} </p>
    <p><strong>Base City:</strong> {{ $formData['base_city'] }} </p>
    <p><strong>Do You Model in Your Base City:</strong> {{ $formData['model_base_city'] }} </p>
    <p><strong>Availability in Base City:</strong> {{ $formData['availability_base_city'] }} </p>
    <p><strong>Do You Travel:</strong> {{ $formData['travel_often'] }} </p>
    <p><strong>Model Tours:</strong> {{ $formData['model_tour'] }} </p>
    <p><strong>Are you an adult film star:</strong> {{ $formData['adult_film_star'] }} </p>
    
    
    <h2>All AIA Models are legal adults.</h2>
    
    <p><strong>Are You Over the age of 18:</strong> {{ $formData['over_eighteen'] }} </p>


    <h2>Your Stats</h2>

    <p><strong>Height:</strong> {{ $formData['height'] }} </p>
    <p><strong>Weight:</strong> {{ $formData['weight'] }} </p>
    <p><strong>Bust Size:</strong> {{ $formData['bust_size'] }} </p>
    <p><strong>Cup Size:</strong> {{ $formData['cup_size'] }} </p>
    <p><strong>Waist:</strong> {{ $formData['waist'] }} </p>
    <p><strong>Hips:</strong> {{ $formData['hips'] }} </p>
    {{-- <p><strong>Hair Color:</strong> {{ $formData['hair_color'] }} </p> --}}
    <p><strong>Eye Color:</strong> {{ $formData['eye_color'] }} </p>
    <p><strong>Tattoos:</strong> {{ $formData['tatoos'] }} </p>
    

    <h2>Your Donation For:</h2>
    
    <p><strong>30 Mins:</strong> {{ $formData['mins_90'] }} </p>
    <p><strong>One Hour:</strong> {{ $formData['hour_1'] }} </p>
    <p><strong>Ninety Mins:</strong> {{ $formData['mins_90'] }} </p>
    <p><strong>Two Mins:</strong> {{ $formData['hours_2'] }} </p>
    <p><strong>Three Mins:</strong> {{ $formData['hours_3'] }} </p>
    <p><strong>Four Mins:</strong> {{ $formData['hours_4'] }} </p>
    <p><strong>Five Mins:</strong> {{ $formData['hours_5'] }} </p>
    <p><strong>OverNight:</strong> {{ $formData['overnight_8_hours'] }} </p>
    <p><strong>OveerDay:</strong> {{ $formData['overday_8_hours'] }} </p>


    <h2>Social Networks Accts:</h2>
    
    Facebook: www.facebook.com
    Instagram: www.instagram.com

    <h2>Please answer these following questions:</h2>
    
    <p><strong>Quesion 1: What is your primary focus and secondary focus in the industry?</strong>
        @if(request()->has('primary_focus')) {{ $formData['primary_focus'] }}, @endif
        @if(request()->has('secondary_focus')) {{ $formData['secondary_focus'] }}, @endif
    </p>

    <p><strong>Question 2: Do you entertain fetish?:</strong> {{ $formData['entertain'] }} </p>

    <p><strong>Question 3: Do you have any racial objections?:</strong> {{ $formData['racial_objections'] }} </p>
    

    <p><strong>Question 4: Do you only see:</strong>
        @if(request()->has('men')) {{ $formData['men'] }}, @endif
        @if(request()->has('women')) {{ $formData['women'] }}, @endif
        @if(request()->has('couple')) {{ $formData['couple'] }}, @endif
        @if(request()->has('transgender')) {{ $formData['transgender'] }}, @endif
    </p>
    
</body>
</html>
<!-- Display form data -->