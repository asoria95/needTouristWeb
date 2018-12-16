<!-- Ages -->
  <div class="form-group">
      <select name="edad" id="edad" class="form-control">
        @for ($edad = 18; $edad <= 95; $edad++)
           <option value="{{$edad}}">{{$edad}}</option>
        @endfor
      </select>
</div>
