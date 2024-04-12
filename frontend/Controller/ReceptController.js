import ReceptView from "../View/ReceptView.js";
import ReceptModel from "../Model/ReceptModel.js";
import ReceptNevView from "../View/ReceptNevView.js";
import DataService from "../Model/DataService.js";

class ReceptController{
    constructor() {
        this.dataService = new DataService();
        this.megjelenitRecepteknevek();
        this.megjelenitReceptek();

    }

    async megjelenitRecepteknevek() {
      await this.dataService.getData("/api/receptnevek", (adatok) => {
        const model = new ReceptModel(adatok);
        new ReceptNevView(model.getAdat(), ".receptnevek");
      });
    }

    async megjelenitReceptek() {
        await this.dataService.getData("/api/receptek", (adatok) => {
          const model = new ReceptModel(adatok);
          new ReceptView(model.getAdat(), ".receptek");
        });
      }
}
export default ReceptController;