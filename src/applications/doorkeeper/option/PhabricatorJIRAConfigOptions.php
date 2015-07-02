<?php

final class PhabricatorJIRAConfigOptions
  extends PhabricatorApplicationConfigOptions {

  public function getName() {
    return pht('Integration with JIRA');
  }

  public function getDescription() {
    return pht('JIRA integration options.');
  }

  public function getGroup() {
    return 'core';
  }

  public function getOptions() {

    return array(
      $this->newOption('jira.post-comment', 'bool', true)
        ->setBoolOptions(
          array(
            pht('Enable commenting'),
            pht('Disable commenting'),
          ))
        ->setSummary(pht('Post comment on JIRA issues when revision updated.'))
        ->setDescription(
          pht(
            'Each time a revision is updated, Differential can post a comment '.
            'on the linked JIRA issue(s). This can be informative, but can '.
            'also overwhelm users with notifications if they are also '.
            'notified by Phabricator.')),
      $this->newOption('jira.post-link', 'bool', true)
        ->setBoolOptions(
          array(
            pht('Enable remote link'),
            pht('Disable remote link'),
          ))
        ->setSummary(pht('On JIRA issues add remote links to revisions.'))
        ->setDescription(
          pht(
            'JIRA issues can have Remote Links to web artifacts related to '.
            'the given issue. This option adds the revision under "implement '.
            'in" under the Issue Links section of the JIRA ticket.'))
    );
  }

}
