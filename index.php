<?php require "header.php" ?>
<div class="presentation">
  <video id="video_prensentation" autoplay loop muted>
    <source src="./assets/video_index_presentation.mp4" type=video/mp4>
  </video>

  <div class="presentation_texte">
    <h2>Mersedi</h2>
    <p>Venez vivre des aventures épiques avec moi, un streamer passionné qui vous invite à explorer l'univers de Paladins et bien plus encore. Rejoignez-moi pour des streams détendus où nous pourrons jouer à une variété de jeux et discuter de tout ce qui nous passionne. De Paladins à d'autres titres populaires, nous passerons de bons moments ensemble !</p>
  </div>
</div>

<div class="banner twitch_banner">
  <iframe src="https://player.twitch.tv/?channel=mersedi_&parent=www.example.com" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="620"></iframe>
  <div class="banner_texte">
    <img src="./assets/twitch_logo.png" alt="Logo twitch">
    <p>Rejoignez-moi en direct sur Twitch pour des moments fun et conviviaux ! Cliquez sur le bouton "Rejoins-nous" juste en dessous pour ne rien manquer de mes prochains streams. Des jeux passionnants, des discussions intéressantes et une communauté chaleureuse vous attendent. Venez passer un moment agréable en ma compagnie, vous ne le regretterez pas !</p>
    <a href="https://www.twitch.tv/mersedi_"><button class="custom-btn twitch_btn">Rejoins-nous</button></a>
  </div>
</div>

<div class="banner discord_banner">
  <div class="banner_texte">
    <img src="./assets/discordlogo.png" alt="Logo discord">
    <p>Rejoignez ma communauté sur Discord pour discuter de jeux, partager des astuces et rencontrer de nouvelles personnes passionnées comme vous ! Cliquez sur le lien ci-dessous pour nous rejoindre et vous connecter avec des joueurs du monde entier. Des événements, des concours et des sessions de jeu en groupe vous attendent. Ne manquez pas cette opportunité de vous amuser et de faire de nouvelles rencontres !</p>
    <a href="https://discord.gg/RXDJk9PPQg"><button class="custom-btn discord_btn">Rejoins-nous</button></a>
  </div>
  <iframe src="https://discord.com/widget?id=882698460321693806&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
</div>
<?php require "./footer.php"; ?>