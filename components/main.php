

<main class="main">
  <section class="profile">
    <img src="./img/me.jpg" alt="Моя фотография" class="profile-photo" />
    <div class="profile-info">
      <p>
        Привет! Я&nbsp;frontend-разработчик с&nbsp;опытом работы более года
        в&nbsp;коммерческих проектах.
      </p>

      <p>
        В&nbsp;основном работаю с&nbsp;Angular, но&nbsp;люблю пробовать
        новые технологии и&nbsp;инструменты, следить за&nbsp;трендами
        в&nbsp;веб-разработке и&nbsp;осваивать интересные подходы.
        В&nbsp;свободное время экспериментирую с&nbsp;личными пет-проектами
        на&nbsp;React.
      </p>

      <p>
        Для меня важно не&nbsp;просто писать код, а&nbsp;создавать
        интерфейсы, которые удобны и&nbsp;приятны для пользователей. Есть
        опыт командной разработки и&nbsp;участия в&nbsp;реальных проектах,
        а&nbsp;также участие в&nbsp;хакатонах&nbsp;&mdash; например,
        я&nbsp;выиграл один от&nbsp;Xpage и&nbsp;Napoleon&nbsp;IT.
      </p>

      <p>
        Помимо работы, люблю развиваться и&nbsp;разнообразно проводить
        время: читаю статьи на&nbsp;Хабре, посещаю локальные IT-мероприятия,
        занимаюсь фотографией, читаю книги и&nbsp;беру уроки игры
        на&nbsp;барабанах. Мне интересно всё новое и&nbsp;я&nbsp;всегда рад
        делиться опытом с&nbsp;коллегами.
      </p>
    </div>
  </section>

  <section class="skills">
    <div class="skills-wrapper">
      <h2>Мои навыки:</h2>
      <button class="btn" id="toggle-skills">Показать</button>
      <ul id="skills-list" class="hidden">
        <?php
        foreach (skills as $skill) {
          echo '<li>' . $skill . '</li>';
        }
        ?>
      </ul>
    </div>
    <div class="favorites-wrapper">
      <h2>Мои фавориты:</h2>
      <button class="btn" id="toggle-favorites">Показать</button>
      <ul id="favorites-list" class="hidden">
        <?php
        for ($i = 0; $i < count(favorites); $i++) {
          echo '<li>' . favorites[$i] . '</li>';
        }
        ?>
      </ul>
    </div>
  </section>

  <section class="download">
    <div class="resume">
      <h2>Моё резюме</h2>
      <div class="btn-wrapper">
        <a
          class="btn"
          target="_blank"
          href="https://drive.google.com/file/d/1qJYcZXWJcCtRYsPb1FAIrxI4F7WBqI5T/view?usp=sharing"
          id="show-pdf"
          >Посмотреть</a
        >
        <button class="btn" id="download-pdf">Скачать</button>
      </div>
    </div>
    <div class="diploma">
      <div class="diploma-inner">
        <h2>Диплом победителя хакатона</h2>
        <div class="hint">
          (недавно я&nbsp;поменял фамилию, поэтому в&nbsp;дипломе она
          отличается)
        </div>
      </div>
      <div class="btn-wrapper">
        <a
          class="btn"
          target="_blank"
          href="https://drive.google.com/file/d/15gUt0jKLWyfcXynIX4S4QG8mMYjyQmZs/view?usp=sharing"
          id="show-diploma"
        >
          Посмотреть</a
        >
        <button class="btn" id="download-diploma">Скачать</button>
      </div>
    </div>
  </section>
</main>
