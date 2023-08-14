class footer extends HTMLElement {
    constructor() {
      super();
    }
  

  connectedCallback() {
    this.innerHTML = `
    <p style="padding: 10px;"></p>
    <footer style="background-color: #3cab7b;" class="text-center text-lg-start text-white">
   
      <div class="container p-4">
       
        <div class="row my-4">
          
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
  
            
              <img src="images/LOGO BVM CONTABILIDADE(logo).png" height="70" alt=""
                   loading="lazy" />
            
  
            <p style="padding-left:10px;" class="text-left">Auditores Contabilidade</p>
  
            
          </div>

          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h4 class="text-uppercase mb-4">Links</h4>
            <div class="footer-link">
            <ul class="list-unstyled">
          
                <li>
                  <p><a href="index.html">Home</a></p>
                </li>
                <li>
                  <p><a href="Servicos.html">Serviços</a></p>
                </li>
                <li>
                  <p><a href="QuemSomos.html">Quem somos</a></p>
                </li>
                <li>
                  <p><a href="Contato.html">Contato</a></p>
                </li>
              </ul>
              </div>
          </div>
     

          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h4 class="text-uppercase mb-4">Contato</h4>
  
            <ul class="list-unstyled footer-link">
                <li>
                  <p><i class="fas fa-map-marker-alt pe-2"></i>Ladeira São João, 212 - Centro, Itapira - SP, 13970-341</p>
                </li>
                <li>
                  <p><i class="fas fa-phone pe-2"></i>(19) 3863-4200</p>
                </li>
                <li>
                  <p><a href="mailto:auditor@bvmauditores.com.br"><i class="fas fa-envelope pe-2 mb-0"></i>auditor@bvmauditores.com.br</a></p>
                </li>
              </ul>
          </div>
     
        </div>
       
      </div>
      
  
      
      <div class="text-center p-3" style="background-color: #247454">
        © 2023 Copyright: BVM Contabilidade - Todos os Direitos Reservados
      </div>
      
    </footer>


    `;

  }
}

  customElements.define('footer-component', footer);