<html>
<head>
<style>
div.gallery {
  margin: 10px;
  border: 2px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 3px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  border: 2px solid black;
  padding-bottom: 10%;
  background-color:yellow; color:red;font-size: 150%;
  text-align: center;
}
</style>
</head>
<body style="background-color:lightblue;">

<div class="gallery">
  <a target="_self" href="ital3.mp4">
    <img src="ital2.jpg" width="800" height="600">
  </a>
  <div class="desc">Italian</div>
</div>

<div class="gallery">
  <a target="_self" href="image1.mp4">
    <img src="ital1.jpg"  width="800" height="600">
  </a>
  <div class="desc">French</div>
</div>

<div class="gallery">
  <a target="_self" href="bulg.mp4">
    <img src="bulg.jpg"  width="800" height="600">
  </a>
  <div class="desc">Bulgarian</div>
</div>

<div class="gallery">
  <a target="_self" href="image3.mp4">
    <img src="usa.jpg"  width="800" height="600">
  </a>
  <div class="desc">USA</div>
</div>

</body>
</html>