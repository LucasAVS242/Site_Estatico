class footer extends HTMLElement {
    constructor() {
      super();
    }
  

  connectedCallback() {
    this.innerHTML = `
    <p style="padding: 10%;"></p>
    <footer class="text-center text-lg-start text-white">
   
      <div class="container p-4">
       
        <div class="row my-4">
          
          <div class="col-lg-8 col-md-6 mb-4 mb-md-0">
  
            
              <img src="images/LOGO BVM CONTABILIDADE(logo).png" height="70" alt=""
                   loading="lazy" />
            
  
            <p class="text-left">BVM auditores contabilidade</p>
  
            
          </div>
  
         
          <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">Contato</h5>
  
            <ul class="list-unstyled">
                <li>
                  <p><i class="fas fa-map-marker-alt pe-2"></i>Endereço: Ladeira São João, 212 - Centro, Itapira - SP, 13970-341</p>
                </li>
                <li>
                  <p><i class="fas fa-phone pe-2"></i>Telefone: (19) 3863-4200</p>
                </li>
                <li>
                  <p><i class="fas fa-envelope pe-2 mb-0"></i>E-mail: auditor@bvmauditores.com.br</p>
                </li>
              </ul>
          </div>
     
        </div>
       
      </div>
      
  
      
      <div class="text-center p-3" style="background-color: #247454">
        © 2023 Copyright:
      </div>
      
    </footer>


    `;

  }
}

  customElements.define('footer-component', footer);