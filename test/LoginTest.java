package automatizado.test;

import static org.junit.Assert.assertTrue;

import org.junit.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.Keys;
import org.openqa.selenium.WebElement;


public class GoogleTest extends BaseTest {
    
    @Test    
    public void deveLogarNoProjeto(){
        
        WebElement inputEmailLogin = driver.findElement(By.name("email"));
        inputEmailLogin.sendKeys("joaquim@email.com" + Keys.TAB);
        WebElement inputSenhaLogin = driver.findElement(By.name("senha"));
        inputSenhaLogin.sendKeys("1234" + Keys.ENTER);


        String resultado = driver.findElement(By.id("success")).getText();

        assertTrue(resultado, resultado.contains("Bem-Vindo"));

    }

}
