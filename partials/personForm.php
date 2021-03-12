<!--<form method="post" action="editPerson.php--><?php //isset($person) ? '?id='.$person->getId() : ''  ?><!--")>-->
<!---->
<!--    <input type="hidden" name="id" value="--><?php //echo isset($person) ? $person->getId() : null ?><!--">-->
<!---->
<!--    <label for="name">Meno</label>-->
<!--    <input type="text" name="name" id="name"  value="--><?php //echo isset($person) ? $person->getName() : null ?><!--"><br>-->
<!---->
<!--    <label for="surname">Priezvisko</label>-->
<!--    <input type="text" name="surname" id="surname"  value="--><?php //echo isset($person) ? $person->getSurname() : null ?><!--"><br>-->
<!---->
<!--    <label for="surname">Dátum narodenia</label>-->
<!--    <input type="text" name="surname" id="surname"  value="--><?php //echo isset($person) ? $person->getBirthDay() : null ?><!--"><br>-->
<!---->
<!--    <label for="surname">Miesto narodenia</label>-->
<!--    <input type="text" name="surname" id="surname"  value="--><?php //echo isset($person) ? $person->getBirthPlace() : null ?><!--"><br>-->
<!---->
<!--    <label for="surname">Krajina narodenia</label>-->
<!--    <input type="text" name="surname" id="surname"  value="--><?php //echo isset($person) ? $person->getBirthCountry() : null ?><!--"><br>-->
<!---->
<!--    <label for="surname">Dátum úmrtia</label>-->
<!--    <input type="text" name="surname" id="surname"  value="--><?php //echo isset($person) ? $person->getDeathDay() : null ?><!--"><br>-->
<!---->
<!--    <label for="surname">Miesto úmrtia</label>-->
<!--    <input type="text" name="surname" id="surname"  value="--><?php //echo isset($person) ? $person->getDeathPlace() : null ?><!--"><br>-->
<!---->
<!--    <label for="surname">Krajina úmrtia</label>-->
<!--    <input type="text" name="surname" id="surname"  value="--><?php //echo isset($person) ? $person->getDeathCountry() : null ?><!--"><br>-->
<!---->
<!--    <input type="submit">-->
<!--</form>-->


<div class="m-7" >
    <form method="post" action="./handleForm.php" id="form">

        <input type="hidden" name="id" value="<?php echo isset($person) ? $person->getId() : null ?>">

        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Meno</label>
            <input type="text" name="name" id="name"  value="<?php echo isset($person) ? $person->getName() : null ?>" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
        </div>
        <div class="mb-6">
            <label for="surname" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Priezvisko</label>
            <input type="text" name="surname" id="surname"  value="<?php echo isset($person) ? $person->getSurname() : null ?>" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
        </div>
        <div class="mb-6">

            <label for="birth_day" class="text-sm text-gray-600 dark:text-gray-400">Dátum narodenia</label>
            <input type="text" name="birth_day" id="birth_day"  value="<?php echo isset($person) ? $person->getBirthDay() : null ?>" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
        </div>
        <div class="mb-6">

            <label for="birth_place" class="text-sm text-gray-600 dark:text-gray-400">Miesto narodenia</label>
            <input type="text" name="birth_place" id="birth_place"  value="<?php echo isset($person) ? $person->getBirthPlace() : null ?>" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
        </div>
        <div class="mb-6">

            <label for="birth_place" class="text-sm text-gray-600 dark:text-gray-400">Krajina narodenia</label>
            <input type="text" name="birth_place" id="birth_place"  value="<?php echo isset($person) ? $person->getBirthCountry() : null ?>" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
        </div>
        <div class="mb-6">

            <label for="death_day" class="text-sm text-gray-600 dark:text-gray-400">Deň úmrtia</label>
            <input type="text" name="death_day" id="death_day"  value="<?php echo isset($person) ? $person->getDeathDay() : null ?>"  class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
        </div>
        <div class="mb-6">

            <label for="death_place" class="text-sm text-gray-600 dark:text-gray-400">Miesto úmrtia</label>
            <input type="text" name="death_place" id="death_place"  value="<?php echo isset($person) ? $person->getDeathPlace() : null ?>"  class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
        </div>
        <div class="mb-6">

            <label for="death_country" class="text-sm text-gray-600 dark:text-gray-400">Krajina úmrtia</label>
            <input type="text" name="death_country" id="death_country"  value="<?php echo isset($person) ? $person->getDeathCountry() : null ?>"  class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
        </div>
        <div class="mb-6">
            <button type="submit" class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Upraviť/vytvoriť osobu</button>
        </div>
        <p class="text-base text-center text-gray-400" id="result">
        </p>
    </form>
</div>