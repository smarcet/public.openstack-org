<?php
/**
 * Copyright 2014 Openstack Foundation
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 **/
/**
 * Class ElectionMigrationTask
 */
final class ElectionMigrationTask extends MigrationTask {

	protected $title = "Election Migration";

	protected $description = "Adds current elections to elections temporal table";

	function up(){
		echo "Starting Migration Proc ...<BR>";
		//check if migration already had ran ...
		$migration = DataObject::get_one("Migration", "Name='{$this->title}'");
		if (!$migration) {

			$g =  new Group;
			$g->setTitle('Community Members');
			$g->setDescription('Community Members');
			$g->setSlug(IFoundationMember::CommunityMemberGroupSlug);
			$g->write();
			$migration = new Migration();
			$migration->Name = $this->title;
			$migration->Description = $this->description;
			$migration->Write();
		}
		echo "Ending  Migration Proc ...<BR>";
	}
}