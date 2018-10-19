<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Form - Create Movie</title>
  </head>

  <body>
    {{ $peliculas[$id] }}



    <form action="">
        
        @csrf

        <label for="">Title: </label>
        <input type="text" name="title" value="{{old['title']}}">
        <label for="">Rating: </label>
        <input type="text" name="rating" value="{{old['rating']}}">
        <label for="">Awards: </label>
        <input type="text" name="awards" value="{{old['awards']}}">
        <label for="">Release date: </label>
        <input type="date" name="release_date" value="{{old['release_date']}}">

    </form>
  </body>

</html>
