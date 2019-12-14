<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
      the_title();
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();


  }
}
?>
	<div id="first_page">
       <div id="first_bloc">
		 <p id="first">Les rencontres de la Fondation le 03 décembre à Bruxelles</p>
		 <p id="second">chaîne alimentaire végétale et durabilité :</p>
		 <p id="third">une question d'équilibre !</p>
		 <input type="button" value="S'inscrire aux rencontres">
       </div>
	</div>
    <div id="second_page">
        <span>La conférence</span>
        <div id="trait"></div>
        <p>Les Rencontres de la Fondation s'intitulent cette année "Chaîne alimentaire <br>
            végétale et durabilité: une question d'équilibre !" Elles se tiendront le 3 décembre prochain à Bruxelles <br>
            et auront pour objectif de décrypter la transition nutritionnelle des systèmes alimentaires à travers le monde,<br>
            qui appelle à favoriser une alimentation plus végétale.</p>
    </div>
    <div id="third_page"></div>
    <div id="fourth_page">
       <h2>Au programme</h2>
       <ul id="test">
       <li><table>
          <tr>
             <th></th>
             <th>Les végétaux dans la chaîne alimentaire</th>
          </tr>
          <tr>
             <td>8:30</td>
             <td>Introduction par Christophe Fondation</td>
          </tr>
          <tr>
             <td>9:00</td>
             <td>Wim de Vries Wageningen University</td>
          </tr>
          <tr>
             <td>9:45</td>
             <td>Benjamin Alles Paris XIII University</td>
          </tr>
          <tr>
             <td>10:15</td>
             <td>Armando Perez Cueto Copenhagen University</td>
          </tr>
          <tr>
             <td>10:45</td>
             <td>Cofee break</td>
          </tr>
          </table></li>
       <li><table>
          <tr>
             <th></th>
             <th>Les activités de la fondation</th>
          </tr>
          <tr>
             <td>11:15</td>
             <td>Jacynthe Lafrenière, Lauréate du Prix de Recherche</td>
          </tr>
          <tr>
             <td>11:35</td>
             <td>Le Projet EPICALIM de la Fondation</td>
          </tr>
          <tr>
             <td>12:00</td>
             <td>Cérémonie du Prix de recherche</td>
          </tr>
          <tr>
             <td>12:30</td>
             <td>Lunch</td>
          </tr>
          </table></li>
        </ul>
     <input type="button" value="S'inscrire aux rencontres">
     
     
    </div>

</div>

<?php get_footer(); ?>

