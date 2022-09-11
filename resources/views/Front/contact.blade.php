@extends('Front.layouts.app')

@section('title')
@endsection


@section('css')
@endsection


@section('content')

<div class="container mb-5">
    <div style="margin-top: 3%; margin-bottom: 1%; text-align: center; font-family: 'Times New Roman', Times, serif;">
        <h4><b> Biziň bilen Habarlaşmak üçin!!! </b></h4>
    </div>


    <div class="row">


        <div class="col-md-8 mt-3">
            <form action="" method="POST">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" value="" class="form-control" type="text" placeholder="Name...">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input name="email" value="" class="form-control" type="email" placeholder="Email...">

                        </div>
                    </div>
                    <div class="col-md-12 m-1">
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input name="subject" value="" class="form-control" type="text  " placeholder="Subject...">

                        </div>
                    </div>
                    <div class="col-md-12 m-1">
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea name="message" value="" id="" class="form-control" placeholder="Some text..." cols="30" rows="6"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 m-1">
                        <div class="form-group">
                            <input style="background-color: #0a4275; width: 20%; float: right; " type="submit" value="Send" class="btn text-white">

                        </div>
                    </div>

            </form>
         </div>
        </div>

        <div class="col-md-4 mt-3">
          <iframe style="width:100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d100697.88772505874!2d58.36204199999999!3d37.934892500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1662751244940!5m2!1sen!2s" width="600" height="450" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>


@endsection


@section('js')
@endsection