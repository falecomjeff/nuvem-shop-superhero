@extends('layouts.base')

@section('title', '| Detalhes do super-héroi')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col col-lg-8">
            <p>
                <h2>Create a new superhero</h2>
            </p>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!! Form::open([
                'route' => 'superhero.store',
                'files' => true,
            ]) !!}

                <div class="form-group">
                    {!! Form::label('nickname', 'Nickname:', ['class' => 'control-label']) !!}
                    {!! Form::text('nickname', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('real_name', 'Real name:', ['class' => 'control-label']) !!}
                    {!! Form::text('real_name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('origin_description', 'Origin description:', ['class' => 'control-label']) !!}
                    {!! Form::textarea('origin_description', null, ['class' => 'form-control', 'rows' => 3]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('superpowers', 'Superporwers:', ['class' => 'control-label']) !!}
                    {!! Form::textarea('superpowers', null, ['class' => 'form-control', 'rows' => 3]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('catch_phrase', 'Catch phrase:', ['class' => 'control-label']) !!}
                    {!! Form::text('catch_phrase', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                <!-- <form name="add_name" id="add_name"> -->

                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>

                    <div class="alert alert-success print-success-msg" style="display:none">
                        <ul></ul>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">
                            <tr>
                                <td>
                                    <input type="file" name="superheroImages[]" placeholder="Insert the superhero image" class="form-control name_list" />
                                </td>
                                <td>
                                    <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                {!! Form::submit('Create superhero', ['class' => 'btn btn-primary']) !!}
                <a class="btn btn-primary" href="{{ URL::to('/') }}" role="button">Back</a>

            {!! Form::close() !!}
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function(){
            var postURL = "<?php echo url('addmore'); ?>";
            var i=1;

            $('#add').click(function(){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="file" name="superheroImages[]" placeholder="Insert the superhero image" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove', function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

          $('#submit').click(function(){
               $.ajax({
                    url:postURL,
                    method:"POST",
                    data:$('#add_name').serialize(),
                    type:'json',
                    success:function(data)
                    {
                        if(data.error){
                            printErrorMsg(data.error);
                        }else{
                            i=1;
                            $('.dynamic-added').remove();
                            $('#add_name')[0].reset();
                            $(".print-success-msg").find("ul").html('');
                            $(".print-success-msg").css('display','block');
                            $(".print-error-msg").css('display','none');
                            $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                        }
                    }
               });
          });

          function printErrorMsg (msg) {
             $(".print-error-msg").find("ul").html('');
             $(".print-error-msg").css('display','block');
             $(".print-success-msg").css('display','none');
             $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
             });
          }
        });
    </script>
@endsection
