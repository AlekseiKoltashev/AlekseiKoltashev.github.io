<form action="https://api-abtr.science174.ru/" method="post" class="d-flex row"
              id="bottomFormFeedBack">
              <input type="text" required class="fs-6-5-suut form-control my-2 from-control-input-suut" name="username"
                id="nameControl" placeholder="Имя" />
              <input type="tel" required class="fs-6-5-suut form-control my-2 from-control-input-suut" name="phone"
                id="phoneControl" placeholder="Телефон" />
              <input type="email"  required class="fs-6-5-suut form-control my-2 from-control-input-suut" name="email"
                id="emailControl" placeholder="Электронная почта" />
              <input type="hidden" name="specialization"
                value="<?php echo $SPEC_NAME?>" />
              <button class="btn btn-primary-suut fs-6-5-suut text-transform-uppercase">
                Отправить заявку
              </button>
              <p id="wrongMessageFormTwo" class="text-dark-suut"></p>
              <p class="fs-8-suut text-dark-suut"> Отправляя заявку с помощью данной формы, вы соглашаетесь с обработкой своих персональных данных в соответствии с 
                <a href="https://www.inueco.ru/files/sveden/files/document/zachitaPD.pdf"> положением</a>
              </p>
</form>