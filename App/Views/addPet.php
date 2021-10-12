<div class="wrapperPet mt-5">
    <h1>Ajouter un Pat</h1>
    <div class="formContainer">
       <form method="POST" action="?page=addPet">
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="name">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" name="age" class="form-control" id="age">
            </div>
            <div class="mb-3">
                <label for="booked" class="form-label">Réservé ?</label>
                <select class="form-select" name="booked" aria-label="booked">
                    <option selected>Choisissez une valeur</option>
                    <option value="0">Non</option>
                    <option value="1">Oui</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image URL (.png)</label>
                <input type="url" class="form-control" name="image" id="image" pattern="https://.*.png" placeholder="https://example.png">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>  
    </div>
   
</div>