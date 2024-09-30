@csrf
  <div class= "container mt-4">
    
    <div class="form-floating mb-3">
      <input type= 'text' name='postTitle' class="form-control" id="floatingInput" placeholder="title">
      <label for="floatingInput">Title</label>
    </div>
    <br>
    
    <div class="form-floating">
      <input type= 'text' name='postDescription'  class="form-control" id="floatingInput" placeholder="this post is for ... ">
      <label for="floatingInput">Description</label>
    </div>
    <br>
    
    <div class="form-floating">
      <input type= 'text' name='postCreator' class="form-control" id="floatingInput" placeholder="created by ...">
      <label for="floatingInput">created by</label>
    </div>
    <br>
    
  @yield('postEditing')
