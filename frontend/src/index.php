<?php
$post = json_decode(file_get_contents('http://heckfren-api/posts/1'));
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <div class="container" style="width: 60%">
      <div class="row">
          <div class="card-panel <?php echo $post->color; ?> darken-3">
            <div class="card-content white-text">
              <h5><span class="card-title"><?php echo $post->title; ?></span></h5>
            </div>
          </div>
          <div class="card">
            <div class="card-image">
              <img src="<?php echo $post->image; ?>">
            </div>
            <div class="card-content">
              <p>Doggo ipsum fluffer big ol pupper. Adorable doggo very good spot boof porgo, big ol pupper. Heck lotsa pats noodle horse shoober tungg, long doggo bork very hand that feed shibe. Doggo clouds smol wow such tempt, long doggo smol. Boof snoot big ol pupper I am bekom fat maximum borkdrive, such treat vvv floofs. Shibe pupper bork stop it fren blep puggo, yapper very taste wow pats length boy. Super chub such treat fluffer, fat boi.</p>
            </div>
            <div class="card-action">
              <a href="<?php echo $post->link->url; ?>"><?php echo $post->link->text; ?></a>
            </div>
          </div>
          <table class="bordered striped responsive-table">
          <tbody>
            <?php
            foreach ($_ENV as $key=>$val) {
              echo "<tr><td>".$key."</td><td>" .$val."</tr>";
            }
            foreach ($_SERVER as $key=>$val ){
              echo "<tr><td>".$key."</td><td>" .$val."</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
      <div>
        <p class="center">api version <strong><?php echo $post->version; ?></strong> | server: <strong><?php echo gethostname(); ?></strong></p>
      </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
  </body>
</html>
