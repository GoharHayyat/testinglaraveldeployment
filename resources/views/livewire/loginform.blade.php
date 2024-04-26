<div>
  
    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <div class="mb-3 mt-3">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-black" wire:click="redirectTosignup">Signup</button>
      </form>
</div>
