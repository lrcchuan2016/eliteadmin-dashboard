import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Routes, RouterModule } from '@angular/router';
import { NgbdtypeheadBasic } from './typehead.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { HttpModule, JsonpModule } from '@angular/http';
const routes: Routes = [{
	path: '',
	data: {
      title: 'Typehead',
      urls: [{title: 'Dashboard', url: '/'},{title: 'ngComponent'},{title: 'Typehead'}]
    },
	component: NgbdtypeheadBasic
}];

@NgModule({
	imports: [
    	FormsModule,
    	CommonModule,
      HttpModule,
      JsonpModule,
      NgbModule.forRoot(),
    	RouterModule.forChild(routes)
    ],
	declarations: [NgbdtypeheadBasic]
})
export class TypeheadModule { }
